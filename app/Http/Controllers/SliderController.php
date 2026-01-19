<?php

namespace App\Http\Controllers;

use App\Http\Requests\sliderRequest;
use App\Models\Slider;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Controllers\ToastController;
use App\Models\Multislider;
use Illuminate\Support\Facades\Storage;

class SliderController extends ToastController
{
    public $redirectTo;
    public $catchErr;

    public function __construct(){
        $this->redirectTo = redirect()->route('admin.sliders.index');
        $this->catchErr = "Bilinmeyen hata";
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders = Slider::orderBy('position', 'ASC')->get();
        return view('admin.sliders.sliders', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.sliders.create-slider');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(sliderRequest $request)
    {
        try{
            $imageName = '/upload/sliders/'.time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('/upload/sliders'), $imageName);

            $maxPosition = slider::orderBy('position', 'desc')->first();
            if(!$maxPosition){
                $position = 1;
            }else{
                $position = $maxPosition->position + 1;
            }

            slider::create([
                'image' => $imageName,
                'name_tr' => $request->name_tr,
                'name_en' => $request->name_en,
                'short_description_tr' => $request->short_description_tr,
                'short_description_en' => $request->short_description_en,
                'position' => $position
            ]);

            return $this->success($this->redirectTo, "Slider eklendi");
        }catch(Exception $err){
            return $this->error($this->redirectTo);
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
        $slider = Slider::findOrFail($id);
        return view('admin.sliders.edit-slider', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(sliderRequest $request, string $id)
    {
        $slider = slider::findOrFail($id);

        try{
            if($request->file('image')){
                @unlink(public_path($slider->image));

                $imageName = '/upload/sliders/'.time().'.'.$request->image->getClientOriginalExtension();
                $request->image->move(public_path('/upload/sliders'), $imageName);
            }else{
                $imageName = $slider->image;
            }

            $slider->update([
                'image' => $imageName,
                'name_tr' => $request->name_tr,
                'name_en' => $request->name_en,
                'short_description_tr' => $request->short_description_tr,
                'short_description_en' => $request->short_description_en
            ]);

            return $this->success($this->redirectTo, "Slider düzenlendi");
        }catch(Exception $err){
            return $this->error($this->redirectTo, $this->catchErr);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $slider = slider::findOrFail($id);

        @unlink(public_path($slider->image));

        $slider->delete();

        return $this->success($this->redirectTo, "Slider kaldırıldı");
    }
}
