<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Controllers\ToastController;
use App\Http\Requests\BlogcategoryRequest;
use App\Models\Blogcategory;
use Exception;

class BlogcategoryController extends ToastController
{
    public $redirectTo;
    public $catchErr;

    public function __construct(){
        $this->redirectTo = redirect()->route('admin.blogcategories.index');
        $this->catchErr = "Bilinmeyen hata";
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogcategories = Blogcategory::orderBy('name_tr', 'ASC')->get();
        return view('admin.blogcategories.blogcategories', compact('blogcategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blogcategories.create-blogcategory');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogcategoryRequest $request)
    {
        try{
            Blogcategory::create([
                'name_tr' => $request->name_tr,
                'name_en' => $request->name_en,
                'slug_tr' => Str::slug($request->name_tr),
                'slug_en' => Str::slug($request->name_en)
            ]);

            return $this->success($this->redirectTo, "Kategori eklendi");
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
        $blogcategory = Blogcategory::find($id);
        return view('admin.blogcategories.edit-blogcategory', compact('blogcategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BlogcategoryRequest $request, string $id)
    {
        $blogcategories = Blogcategory::findOrFail($id);

        try{
            $blogcategories->update([
                'name_tr' => $request->name_tr,
                'name_en' => $request->name_en,
                'slug_tr' => Str::slug($request->name_tr),
                'slug_en' => Str::slug($request->name_en)
            ]);

            return $this->success($this->redirectTo, "Kategori düzenlendi");
        }catch(Exception $err){
            return $this->error($this->redirectTo, $this->catchErr);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Blogcategory::findOrFail($id)->delete();

        return $this->success($this->redirectTo, "Kategori kaldırıldı");
    }
}
