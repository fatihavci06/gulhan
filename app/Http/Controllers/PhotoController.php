<?php

namespace App\Http\Controllers;

use App\Http\Requests\PhotoRequest;
use App\Models\Photo;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Controllers\ToastController;
use App\Models\MultiPhoto;
use Illuminate\Support\Facades\Storage;

class PhotoController extends ToastController
{
    public $redirectTo;
    public $catchErr;

    public function __construct(){
        $this->redirectTo = redirect()->route('admin.photos.index');
        $this->catchErr = "Bilinmeyen hata";
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $photos = Photo::orderBy('position', 'ASC')->get();
        return view('admin.photos.photos', compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.photos.create-photo');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PhotoRequest $request)
    {
        try{
            $imageName = '/upload/photos/'.$request->name_tr.'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('/upload/photos'), $imageName);

            $maxPosition = Photo::orderBy('position', 'desc')->first();
            if(!$maxPosition){
                $position = 1;
            }else{
                $position = $maxPosition->position + 1;
            }

            $photo = Photo::create([
                'image' => $imageName,
                'name_tr' => $request->name_tr,
                'name_en' => $request->name_en,
                'short_description_tr' => $request->short_description_tr,
                'short_description_en' => $request->short_description_en,
                'slug_tr' => Str::slug($request->name_tr),
                'slug_en' => Str::slug($request->name_en),
                'position' => $position
            ]);

            if($request->file('images')){
                foreach($request->file('images') as $key => $image){
                    $imageName = '/upload/photos/'.$request->name_tr.'-'.$key.time().'.'.$image->getClientOriginalExtension();
                    $image->move(public_path('/upload/photos'), $imageName);

                    $maxPosition = MultiPhoto::orderBy('position', 'desc')->first();
                    if(!$maxPosition){
                        $position = 1;
                    }else{
                        $position = $maxPosition->position + 1;
                    }

                    MultiPhoto::create([
                        "photo_id" => $photo->id,
                        "image" => $imageName,
                        "position" => $position
                    ]);
                }
            }

            return $this->success($this->redirectTo, "Foto Galeri eklendi");
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
        $photo = Photo::with('multiPhotos')->where('id', $id)->first();
        return view('admin.photos.edit-photo', compact('photo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PhotoRequest $request, string $id)
    {
        $photo = Photo::findOrFail($id);

        try{
            if($request->file('image')){
                @unlink(public_path($photo->image));

                $imageName = '/upload/photos/'.$request->name.'.'.$request->image->getClientOriginalExtension();
                $request->image->move(public_path('/upload/photos'), $imageName);
            }else{
                $imageName = $photo->image;
            }

            $photo->update([
                'image' => $imageName,
                'name_tr' => $request->name_tr,
                'name_en' => $request->name_en,
                'short_description_tr' => $request->short_description_tr,
                'short_description_en' => $request->short_description_en,
                'slug_tr' => Str::slug($request->name_tr),
                'slug_en' => Str::slug($request->name_en)
            ]);

            if($request->file('images')){
                foreach($request->file('images') as $key => $image){
                    $imageName = '/upload/photos/'.$request->name_tr.'-'.$key.time().'.'.$image->getClientOriginalExtension();
                    $image->move(public_path('/upload/photos'), $imageName);

                    $maxPosition = MultiPhoto::orderBy('position', 'desc')->first();
                    if(!$maxPosition){
                        $position = 1;
                    }else{
                        $position = $maxPosition->position + 1;
                    }

                    MultiPhoto::create([
                        "photo_id" => $photo->id,
                        "image" => $imageName,
                        "position" => $position
                    ]);
                }
            }

            return $this->success($this->redirectTo, "Foto Galeri düzenlendi");
        }catch(Exception $err){
            return $this->error($this->redirectTo, $this->catchErr);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $photo = Photo::findOrFail($id);

        @unlink(public_path($photo->image));

        $multiPhotos = MultiPhoto::where('photo_id', $photo->id)->get();
        foreach($multiPhotos as $multiPhoto){
            @unlink(public_path($multiPhoto->image));
            MultiPhoto::where('id', $multiPhoto->id)->delete();
        }

        $photo->delete();

        return $this->success($this->redirectTo, "Foto Galeri kaldırıldı");
    }
}
