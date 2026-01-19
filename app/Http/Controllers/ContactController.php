<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\ToastController;

class ContactController extends ToastController
{
    public $redirectTo;
    public $catchErr;

    public function __construct(){
        $this->redirectTo = redirect()->route('admin.contacts.edit');
        $this->catchErr = "Bilinmeyen hata";
    }

    public function edit(){
        $contact = Contact::find(1);

        return view('admin.contacts.edit-contact', compact('contact'));
    }

    public function update(Request $request){
        $contact = Contact::find(1);

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
                "map" => $request->map[$key],
            ];

            array_push($shops, $newShop);
        }

        $contact->shops = json_encode($shops);
        $contact->save();

        return $this->success($this->redirectTo, 'İletişim güncellendi');
    }
}
