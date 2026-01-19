<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Controllers\ToastController;
use App\Http\Requests\ProductcategoryRequest;
use App\Models\Productcategory;
use Exception;

class ProductcategoryController extends ToastController
{
    public $redirectTo;
    public $catchErr;

    public function __construct(){
        $this->redirectTo = redirect()->route('admin.productcategories.index');
        $this->catchErr = "Bilinmeyen hata";
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productcategories = Productcategory::orderBy('name_tr', 'ASC')->get();
        return view('admin.productcategories.productcategories', compact('productcategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $productcategories = Productcategory::where('category_id', null)->orderBy('name_tr', 'ASC')->get();

        return view('admin.productcategories.create-productcategory', compact('productcategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductcategoryRequest $request)
    {
        try{
            $originalSlug = Str::slug($request->input('name'));
            $slug = $originalSlug;

            if($request->file('image')){
                $imageName = '/upload/product-category/'.$slug.'.'.$request->image->getClientOriginalExtension();
                $request->image->move(public_path('/upload/product-category'), $imageName);
            }else{
                $imageName = '/images/no-image.png';
            }

            Productcategory::create([
                'image' => $imageName,
                'name_tr' => $request->name_tr,
                'name_en' => $request->name_en,
                'category_id' => $request->category_id,
                'slug_tr' => Str::slug($request->name_tr),
                'slug_en' => Str::slug($request->name_en)
            ]);

            return $this->success($this->redirectTo, "Kategori eklendi");
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
        $productcategory = productcategory::find($id);
        $productcategories = Productcategory::where('category_id', null)->orderBy('name_tr', 'ASC')->get();

        return view('admin.productcategories.edit-productcategory', compact('productcategory', 'productcategories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(productcategoryRequest $request, string $id)
    {
        $productcategories = productcategory::findOrFail($id);

        try{
            $originalSlug = Str::slug($request->input('name'));
            $slug = $originalSlug;
            $counter = 2;

            if($request->file('image')){
                @unlink(public_path($productcategories->image));
                $imageName = '/upload/product-category/'.$slug.'.'.$request->image->getClientOriginalExtension();
                $request->image->move(public_path('/upload/product-category'), $imageName);
            }else{
                $imageName = $productcategories->image;
            }

            $productcategories->update([
                'image' => $imageName,
                'name_tr' => $request->name_tr,
                'name_en' => $request->name_en,
                'category_id' => $request->category_id,
                'slug_tr' => Str::slug($request->name_tr),
                'slug_en' => Str::slug($request->name_en)
            ]);

            return $this->success($this->redirectTo, "Kategori düzenlendi");
        }catch(Exception $err){
            return $this->error($this->redirectTo, $err->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        productcategory::findOrFail($id)->delete();

        return $this->success($this->redirectTo, "Kategori kaldırıldı");
    }
}
