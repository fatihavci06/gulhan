<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ToastController;
use Exception;

class AuthController extends ToastController
{
    public $redirectTo;
    public $catchErr;

    public function __construct(){
        $this->redirectTo = redirect()->route('login');
        $this->catchErr = "Bilinmeyen hata";
    }

    public function getLogin(){
        return view('auth.login');
    }

    public function postLogin(LoginRequest $request){
        try{
            $inputs = $request->only('email', 'password');

            $route = route('admin.dashboard');
            if(Auth::attempt($inputs)){
                $intendedRoute = redirect()->intended($route);
                return $this->success($intendedRoute, 'Giriş yapıldı');
            }

            return $this->error(redirect()->back(), 'Giriş bilgileri hatalı');
        }catch(Exception $err){
            return $this->error($this->redirectTo);
        }
    }

    public function postLogout(){
        Auth::logout();

        return $this->success($this->redirectTo, 'Çıkış yapıldı');
    }
}
