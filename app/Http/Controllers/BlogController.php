<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Controllers\ToastController;
use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use App\Models\Blogcategory;
use App\Models\Blogphoto;
use Exception;

class BlogController extends ToastController
{
    public $redirectTo;
    public $catchErr;

    public function __construct(){
        $this->redirectTo = redirect()->route('admin.blogs.index');
        $this->catchErr = "Bilinmeyen hata";
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::orderBy('updated_at', 'DESC')->get();
        return view('admin.blogs.blogs', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Blogcategory::all();
        return view('admin.blogs.create-blog', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogRequest $request)
    {
        try{
            if($request->file('image')){
                $imageName = '/upload/blogs/'.$request->name_tr.'.'.$request->image->getClientOriginalExtension();
                $request->image->move(public_path('/upload/blogs'), $imageName);
            }else{
                $imageName = '/images/no-image.png';
            }

            $blog = Blog::create([
                'image' => $imageName,
                'name_tr' => $request->name_tr,
                'name_en' => $request->name_en,
                'description_tr' => $request->description_tr,
                'description_en' => $request->description_en,
                'slug_tr' => Str::slug($request->name_tr),
                'slug_en' => Str::slug($request->name_en)
            ]);

            $blog->categories()->sync($request->categories);

            if($request->file('images')){
                foreach($request->file('images') as $image){
                    $randomNumber = mt_rand(100000, 999999);

                    $imageName = '/upload/blogs/photos/'.$request->name_tr.'-'.$randomNumber.'.'.$image->getClientOriginalExtension();
                    $image->move(public_path('/upload/blogs/photos'), $imageName);

                    $maxPosition = Blogphoto::orderBy('position', 'desc')->first();
                    if(!$maxPosition){
                        $position = 1;
                    }else{
                        $position = $maxPosition->position + 1;
                    }

                    Blogphoto::create([
                        'blog_id' => $blog->id,
                        'image' => $imageName,
                        'position' => $position
                    ]);
                }
            }

            return $this->success($this->redirectTo, "Haber eklendi");
        }catch(Exception $err){
            return $this->error($this->redirectTo, 'bilinmeyen hata');
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
        $blog = Blog::findOrFail($id);
        $categories = Blogcategory::all();

        return view('admin.blogs.edit-blog', compact('blog', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BlogRequest $request, string $id)
    {
        $blog = Blog::findOrFail($id);

        try{
            if($request->file('image')){
                @unlink(public_path($blog->image));

                $imageName = '/upload/blogs/'.$request->name_tr.'.'.$request->image->getClientOriginalExtension();
                $request->image->move(public_path('/upload/blogs'), $imageName);
            }else{
                $imageName = $blog->image;
            }

            $blog->update([
                'image' => $imageName,
                'name_tr' => $request->name_tr,
                'name_en' => $request->name_en,
                'description_tr' => $request->description_tr,
                'description_en' => $request->description_en,
                'slug_tr' => Str::slug($request->name_tr),
                'slug_en' => Str::slug($request->name_en)
            ]);

            $blog->categories()->sync($request->categories);

            if($request->file('images')){
                foreach($request->file('images') as $image){
                    $randomNumber = mt_rand(100000, 999999);

                    $imageName = '/upload/blogs/photos/'.$request->name_tr.'-'.$randomNumber.'.'.$image->getClientOriginalExtension();
                    $image->move(public_path('/upload/blogs/photos'), $imageName);

                    $maxPosition = Blogphoto::orderBy('position', 'desc')->first();
                    if(!$maxPosition){
                        $position = 1;
                    }else{
                        $position = $maxPosition->position + 1;
                    }

                    Blogphoto::create([
                        'blog_id' => $blog->id,
                        'image' => $imageName,
                        'position' => $position
                    ]);
                }
            }

            return $this->success($this->redirectTo, "Haber düzenlendi");
        }catch(Exception $err){
            return $this->error($this->redirectTo, $this->catchErr);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = Blog::with('photos')->where('id', $id)->first();
        try{
            @unlink(public_path($blog->image));
            $blog->delete();

            return $this->success($this->redirectTo, "Haber kaldırıldı");
        }catch(Exception $err){
            return $this->error($this->redirectTo, $err->getMessage());
        }
    }
}
