<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToastController extends Controller
{
    public function success($redirectTo, $message){
        session()->flash('alert_type', 'success');
        session()->flash('alert_message', $message);

        return $redirectTo;
    }

    public function error($redirectTo, $message = "Bilinmeyen Hata"){
        session()->flash('alert_type', 'error');
        session()->flash('alert_message', $message);

        return $redirectTo;
    }
}
