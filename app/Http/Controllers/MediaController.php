<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;
use App\Http\Controllers\ToastController;

class MediaController extends ToastController
{
    public $redirectTo;
    public $catchErr;

    public function __construct(){
        $this->redirectTo = redirect()->route('admin.medias.entry');
        $this->catchErr = "Bilinmeyen hata";
    }

    public function getEntry(){
        $media = Media::find(1);

        return view('admin.medias.entry-media', compact('media'));
    }

    public function updateEntry(Request $request){
        $media = Media::find(1);

        $media->description = $request->description;
        $media->save();

        return $this->success($this->redirectTo, 'Medya giriş güncellendi');
    }
}
