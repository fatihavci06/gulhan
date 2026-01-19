<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ToastController;
use App\Models\Mission;

class MissionController extends ToastController
{
    public $redirectTo;
    public $catchErr;

    public function __construct(){
        $this->redirectTo = redirect()->route('admin.mission');
        $this->catchErr = "Bilinmeyen hata";
    }

    public function getMission(){
        $mission = Mission::find(1);

        return view('admin.missions.edit-mission', compact('mission'));
    }

    public function updateMission(Request $request){
        $mission = Mission::find(1);

        $mission->description = $request->description;
        $mission->save();

        return $this->success($this->redirectTo, 'Misyon ve Vizyon güncellendi');
    }
}
