<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BestSeller;
use App\Models\Product;
use Illuminate\Http\Request;

class BestSellerController extends Controller
{
    public function index()
    {
        // Mevcut seçili ürünlerin ID'lerini al (Select2'de seçili gelsin diye)
        $selectedIds = BestSeller::pluck('product_id')->toArray();

        // Tüm ürünleri listele (Dropdown için)
        // Admin panel Türkçe olduğu için name_tr'yi alıyoruz
        $products = Product::select('id', 'name_tr', 'gyp_code')->orderBy('name_tr')->get();

        return view('admin.bestsellers.index', compact('products', 'selectedIds'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'products' => 'required|array|min:1|max:8', // En az 1, en fazla 8 ürün
        ], [
            'products.max' => 'En fazla 8 adet ürün seçebilirsiniz.',
            'products.required' => 'Lütfen en az bir ürün seçin.'
        ]);

        // Önce tabloyu temizle (Eski listeyi sil)
        BestSeller::truncate();

        // Yeni seçilenleri kaydet
        foreach($request->products as $index => $productId) {
            BestSeller::create([
                'product_id' => $productId,
                'position' => $index // Seçim sırasına göre pozisyon ver
            ]);
        }

        return back()->with('success', 'En çok satılan ürünler listesi güncellendi.');
    }
}
