<?php

namespace App\Http\Controllers;

use App\Http\Requests\VideoRequest;
use App\Models\Video;
use Illuminate\Support\Str;
use App\Http\Controllers\ToastController;
use Exception;
use Illuminate\Http\Request;

class VideoController extends ToastController
{
    public $redirectTo;
    public $catchErr;

    public function __construct(){
        $this->redirectTo = redirect()->route('admin.videos.index');
        $this->catchErr = "Bilinmeyen hata";
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videos = Video::orderBy('position', 'ASC')->get();
        return view('admin.videos.videos', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.videos.create-video');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VideoRequest $request)
    {
        try{
            $imageName = '/upload/videos/'.$request->name_tr.'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('/upload/videos'), $imageName);

            $maxPosition = Video::orderBy('position', 'desc')->first();
            if(!$maxPosition){
                $position = 1;
            }else{
                $position = $maxPosition->position + 1;
            }

            Video::create([
                'image' => $imageName,
                'name_tr' => $request->name_tr,
                'name_en' => $request->name_en,
                'short_description_tr' => $request->short_description_tr,
                'short_description_en' => $request->short_description_en,
                'video_tr' => $request->video_tr,
                'video_en' => $request->video_en,
                'slug_tr' => Str::slug($request->name_tr),
                'slug_en' => Str::slug($request->name_en),
                'position' => $position
            ]);

            return $this->success($this->redirectTo, "Video eklendi");
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
        $video = Video::find($id);
        return view('admin.videos.edit-video', compact('video'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(VideoRequest $request, string $id)
    {
        $video = Video::findOrFail($id);

        try{
            if($request->file('image')){
                @unlink(public_path($video->image));

                $imageName = '/upload/videos/'.$request->name_tr.'.'.$request->image->getClientOriginalExtension();
                $request->image->move(public_path('/upload/videos'), $imageName);
            }else{
                $imageName = $video->image;
            }

            $video->update([
                'image' => $imageName,
                'name_tr' => $request->name_tr,
                'name_en' => $request->name_en,
                'short_description_tr' => $request->short_description_tr,
                'short_description_en' => $request->short_description_en,
                'video_tr' => $request->video_tr,
                'video_en' => $request->video_en,
                'slug_tr' => Str::slug($request->name_tr),
                'slug_en' => Str::slug($request->name_en)
            ]);

            return $this->success($this->redirectTo, "Video düzenlendi");
        }catch(Exception $err){
            return $this->error($this->redirectTo, $this->catchErr);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $video = Video::findOrFail($id);

        @unlink(public_path($video->image));

        $video->delete();

        return $this->success($this->redirectTo, "Video kaldırıldı");
    }
}
