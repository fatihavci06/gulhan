<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Controllers\ToastController;
use App\Http\Requests\BrandRequest;
use App\Models\Brand;
use App\Models\Productcategory;
use Exception;

class BrandController extends ToastController
{
    public $redirectTo;
    public $catchErr;

    public function __construct(){
        $this->redirectTo = redirect()->route('admin.brands.index');
        $this->catchErr = "Bilinmeyen hata";
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::orderBy('updated_at', 'DESC')->get();
        return view('admin.brands.brands', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Productcategory::all();
        return view('admin.brands.create-brand', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BrandRequest $request)
    {
        try{
            $originalSlug = Str::slug($request->input('name'));
            $slug = $originalSlug;
            $counter = 2;

            while (Brand::where('slug', $slug)->exists()) {
                $slug = $originalSlug . '-' . $counter;
                $counter++;
            }
            
            Brand::create([
                'name' => $request->name,
                'slug' => $slug
            ]);

            return $this->success($this->redirectTo, "Marka eklendi");
        }catch(Exception $err){
            return $this->error($this->redirectTo, $this->catchErr);
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
        $brand = Brand::find($id);
        return view('admin.brands.edit-brand', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BrandRequest $request, string $id)
    {
        $brand = Brand::findOrFail($id);

        try{
            if($brand->name != $request->name){
                $originalSlug = Str::slug($request->input('name'));
                $slug = $originalSlug;
                $counter = 2;
    
                while (Brand::where('slug', $slug)->exists()) {
                    $slug = $originalSlug . '-' . $counter;
                    $counter++;
                }
            }else{
                $slug = $brand->slug;
            }

            $brand->update([
                'name' => $request->name,
                'slug' => $slug
            ]);

            return $this->success($this->redirectTo, "Marka düzenlendi");
        }catch(Exception $err){
            return $this->error($this->redirectTo, $this->catchErr);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Brand::findOrFail($id)->delete();

        return $this->success($this->redirectTo, "Marka kaldırıldı");
    }
}
