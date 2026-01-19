<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Controllers\ToastController;
use App\Http\Requests\ProductRequest;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Productcategory;
use Exception;

class ProductController extends ToastController
{
    public $redirectTo;
    public $catchErr;

    public function __construct(){
        $this->redirectTo = redirect()->route('admin.products.index');
        $this->catchErr = "Bilinmeyen hata";
    }

    /**
     * Display a listing of the resource.
     */
    public function getProducts(Request $request){
    // Sidebar (Yan Menü) için kategoriler ve markalar
    $categories = Productcategory::orderBy('name_tr', 'ASC')->whereNull('category_id')->get();
    $brands = Brand::orderBy('name', 'ASC')->get();

    // Ürün sorgusunu başlatıyoruz
    $query = Product::with('brands')->latest('updated_at');

    // 1. ARAMA FİLTRESİ (Navbar'daki arama kutusu için)
    if ($request->filled('keyword')) {
        $keyword = $request->keyword;
        $query->where(function($q) use ($keyword) {
            $q->where('name_tr', 'LIKE', "%{$keyword}%")
              ->orWhere('name_en', 'LIKE', "%{$keyword}%")
              ->orWhere('gyp_code', 'LIKE', "%{$keyword}%")      // GYP Koduna göre arama
              ->orWhere('original_no', 'LIKE', "%{$keyword}%");  // Orijinal No'ya göre arama
        });
    }

    // 2. SAYFALAMA (12'şerli gösterim)
    // Blade tarafında links() metodunun çalışması için paginate kullanıyoruz.
    $products = $query->paginate(12);

    // Eğer arama yapıldıysa, sayfalama linklerine arama kelimesini ekle (2. sayfaya geçince arama kaybolmasın diye)
    if ($request->filled('keyword')) {
        $products->appends(['keyword' => $request->keyword]);
    }

    return view('pages.products', compact('categories', 'brands', 'products'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Productcategory::latest('updated_at')->get();
        $brands = Brand::latest('updated_at')->get();

        return view('admin.products.create-product', compact('categories', 'brands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        try{
            if($request->file('image')){
                $imageName = '/upload/products/'.$request->name_tr.'-'.time().'.'.$request->image->getClientOriginalExtension();
                $request->image->move(public_path('/upload/products'), $imageName);
            }else{
                $imageName = '/images/no-image.png';
            }

            $product = Product::create([
                'image' => $imageName,
                'name_tr' => $request->name_tr,
                'name_en' => $request->name_en,
                'description_tr' => $request->description_tr,
                'description_en' => $request->description_en,
                'original_no' => $request->original_no,
                'gyp_code' => $request->gyp_code,
                'size' => $request->size,
                'slug_tr' => Str::slug($request->name_tr),
                'slug_en' => Str::slug($request->name_en)
            ]);

            $product->brands()->attach($request->brands);
            $product->categories()->attach($request->categories);

            return $this->success($this->redirectTo, "Ürün eklendi");
        }catch(Exception $err){
            return $this->error($this->redirectTo, $err->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        $categories = Productcategory::latest('updated_at')->get();
        $brands = Brand::latest('updated_at')->get();

        return view('admin.products.edit-product', compact('product', 'categories', 'brands'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, string $id)
    {
        $product = product::findOrFail($id);

        try{
            if($request->file('image')){
                @unlink(public_path($product->image));

                $imageName = '/upload/products/'.$request->name_tr.'-'.time().'.'.$request->image->getClientOriginalExtension();
                $request->image->move(public_path('/upload/products'), $imageName);
            }else{
                $imageName = $product->image;
            }

            $product->update([
                'image' => $imageName,
                'name_tr' => $request->name_tr,
                'name_en' => $request->name_en,
                'description_tr' => $request->description_tr,
                'description_en' => $request->description_en,
                'original_no' => $request->original_no,
                'gyp_code' => $request->gyp_code,
                'size' => $request->size,
                'slug_tr' => Str::slug($request->name_tr),
                'slug_en' => Str::slug($request->name_en)
            ]);

            return $this->success($this->redirectTo, "Ürün düzenlendi");
        }catch(Exception $err){
            return $this->error($this->redirectTo, $err->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = product::findOrFail($id);

        @unlink(public_path($product->image));

        $product->delete();

        return $this->success($this->redirectTo, "Ürün kaldırıldı");
    }
}
