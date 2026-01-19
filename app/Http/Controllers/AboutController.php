<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\ToastController;

class AboutController extends ToastController
{
    public $redirectTo;
    public $catchErr;

    public function __construct(){
        $this->redirectTo = redirect()->route('admin.about');
        $this->catchErr = "Bilinmeyen hata";
    }

    public function getAbout(){
        $about = About::find(1);

        return view('admin.abouts.edit-about', compact('about'));
    }

    public function updateAbout(Request $request){
        $about = About::find(1);

        $about->description = $request->description;
        $about->save();

        return $this->success($this->redirectTo, 'Hakkımızda güncellendi');
    }
}
