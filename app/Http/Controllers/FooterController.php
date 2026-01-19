<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\ToastController;
use App\Http\Requests\FooterRequest;

class FooterController extends ToastController
{
    public $redirectTo;
    public $catchErr;

    public function __construct(){
        $this->redirectTo = redirect()->route('admin.footers.edit');
        $this->catchErr = "Bilinmeyen hata";
    }

    public function edit(){
        $footer = Footer::find(1);

        return view('admin.footers.edit-footer', compact('footer'));
    }

    public function update(Request $request){
        $footer = Footer::find(1);

        $footer->description = $request->description;

        $shops = [];
        foreach($request->name_tr as $key => $value){
            $newShop = [
                "name_tr" => $request->name_tr[$key],
                "name_en" => $request->name_en[$key],
                "address" => $request->address[$key],
                "phone" => $request->phone[$key],
                "fax" => $request->fax[$key],
                "email_tr" => $request->email_tr[$key],
                "email_en" => $request->email_en[$key],
            ];

            array_push($shops, $newShop);
        }

        $footer->shops = json_encode($shops);
        $footer->save();

        return $this->success($this->redirectTo, 'Footer güncellendi');
    }
}
