<?php

namespace App\Http\Controllers;

use App\Mail\QuoteRequestMail;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Mail; // Mail gönderimi için (Daha sonra Mail sınıfı eklenecek)
// use App\Mail\QuoteRequestMail; // Mail sınıfını oluşturunca burayı açacağız.

class CartController extends Controller
{
    // 1. Listeyi Görüntüleme Sayfası
    public function index()
    {
        $cart = session()->get('cart', []);
        return view('pages.quote-cart', compact('cart'));
    }

    // 2. Listeye Ekleme (AJAX)
    public function addToCart(Request $request)
    {
        $id = $request->id;
        $quantity = $request->quantity ?? 1;

        $product = Product::find($id);

        if (!$product) {
            // Çeviri: Ürün bulunamadı
            return response()->json(['status' => 'error', 'message' => __('messages.product_not_found')]);
        }

        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity'] += $quantity;
        } else {
            $cart[$id] = [
                "name_tr" => $product->name_tr,
                "name_en" => $product->name_en,
                "gyp_code" => $product->gyp_code,
                "image" => $product->image,
                "quantity" => $quantity,

                // ÖNEMLİ: Linklerin çalışması için Slug'ları da ekliyoruz
                "slug_tr" => $product->slug_tr,
                "slug_en" => $product->slug_en
            ];
        }

        session()->put('cart', $cart);

        return response()->json([
            'status' => 'success',
            // Çeviri: Listeye eklendi
            'message' => __('messages.added_successfully'),
            'count' => count($cart)
        ]);
    }

    // 3. Listeyi Güncelleme (Adet Değiştirme)
    public function updateCart(Request $request)
    {
        if ($request->id && $request->quantity) {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            return response()->json(['status' => 'success', 'message' => 'Liste güncellendi']);
        }
    }

    // 4. Listeden Ürün Silme
    public function removeCart(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            return response()->json(['status' => 'success', 'message' => 'Ürün silindi', 'count' => count($cart)]);
        }
    }

    // 5. Listeyi Temizle
    public function clearCart()
    {
        session()->forget('cart');
        return redirect()->back()->with('success', 'Liste temizlendi.');
    }

    // 6. Teklif Gönderme (DB Kayıt + Mail)
    public function submitQuote(Request $request)
    {
        // 1. Validasyon (Hata varsa Laravel otomatik olarak geri döner ve $errors değişkenini doldurur)
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required',
            'country' => 'required',
        ], [
            // İsteğe bağlı: Özel hata mesajları (veya lang/tr/validation.php kullanılır)
            'name.required' => 'Ad Soyad alanı zorunludur.',
            'email.required' => 'E-posta alanı zorunludur.',
            // ...
        ]);

        $cart = session()->get('cart');

        if (!$cart || count($cart) == 0) {
            return redirect()->back()->with('error', __('messages.list_empty'));
        }

        // DB'ye Kayıt
        $order = new Order();
        $order->name = $request->name;
        $order->title = $request->title;
        $order->company = $request->company;
        $order->phone = $request->phone;
        $order->email = $request->email;
        $order->country = $request->country;
        $order->message = $request->message;
        $order->ip_address = $request->ip();
        $order->save();

        // Kalemleri Kaydet
        foreach ($cart as $id => $details) {
            $item = new OrderItem();
            $item->order_id = $order->id;
            $item->product_id = $id;
            $item->product_name = $details['name_tr'];
            $item->product_code = $details['gyp_code'];
            $item->quantity = $details['quantity'];
            $item->save();
        }
        try {
        // info@gulhan.com yerine kendi alıcı adresinizi yazın
        // $order nesnesi items ilişkisine sahip olduğu için view'de ürünleri çekebiliriz
        Mail::to('info@gulhan.com')->send(new QuoteRequestMail($order));
    } catch (\Exception $e) {
        // Mail gitmese bile sipariş kaydedildi, hatayı loglayıp devam edelim
        // \Log::error('Mail gönderme hatası: ' . $e->getMessage());
    }

        // Sepeti Boşalt
        session()->forget('cart');

        // DEĞİŞİKLİK BURADA: Anasayfa yerine geri yönlendiriyoruz (back)
        return redirect()->back()->with('success', __('messages.quote_success_message') ?? 'Teklifiniz başarıyla alındı.');
    }
}
