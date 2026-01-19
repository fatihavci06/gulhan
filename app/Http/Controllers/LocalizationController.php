<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use App\Models\Product; // Ürün Modelini eklemeyi unutmayın
// Kategori, Blog vs. modelleri de gerekirse ekleyin

class LocalizationController extends Controller
{
    public function setLang($locale)
    {
        App::setLocale($locale);
        Session::put('locale', $locale);

        // 1. Önceki URL'i ve Rota Bilgilerini Al
        $previousUrl = url()->previous();

        try {
            // Önceki URL'den Request nesnesi oluşturup rotayı eşleştiriyoruz
            $request = app('request')->create($previousUrl);
            $route = app('router')->getRoutes()->match($request);

            $routeName = $route->getName();
            $parameters = $route->parameters(); // ID, Slug vb. burada
        } catch (\Exception $e) {
            // Eğer rota bulunamazsa ana sayfaya at
            return redirect()->route($locale . '.home');
        }

        // 2. Rota İsmini Yeni Dile Göre Ayarla (tr.home -> en.home)
        if (str_contains($routeName, 'tr.')) {
            $baseRouteName = str_replace('tr.', '', $routeName);
        } elseif (str_contains($routeName, 'en.')) {
            $baseRouteName = str_replace('en.', '', $routeName);
        } else {
            // Çevrilebilir bir rota değilse (örn: admin) geri dön
            return redirect()->back();
        }

        $redirectRoute = $locale . '.' . $baseRouteName;

        // 3. SLUG ÇEVİRİSİ (Kritik Nokta)
        // Eğer ID varsa, veritabanından yeni dilin slug'ını bulmamız lazım.
        // Aksi takdirde Türkçe sayfada İngilizce slug kalır (veya tam tersi).

        if (isset($parameters['id'])) {
            // Ürün Detay Sayfası mı?
            if (str_contains($baseRouteName, 'getProductDetail')) {
                $product = Product::find($parameters['id']);
                if ($product) {
                    $slugField = $locale == 'tr' ? 'slug_tr' : 'slug_en';
                    $parameters['slug'] = $product->$slugField;
                }
            }
            // Kategori, Blog vb. için benzer if blokları eklenebilir
            // elseif (str_contains($baseRouteName, 'getCategoryProducts')) { ... }
        }

        // Eğer ID yok ama sadece Slug varsa (Kategori sayfaları gibi id'siz rotalar için)
        // Bu durumda model olmadığı için slug'ı çevirmek zor olabilir,
        // manuel query gerekir veya olduğu gibi bırakılır.

        // 4. Yeni Rotaya Yönlendir
        return redirect()->route($redirectRoute, $parameters);
    }
}
