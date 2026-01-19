<?php

namespace App\Http\Controllers;

use App\Models\Blogphoto;
use App\Models\MultiPhoto;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AjaxController extends Controller
{
    public function updatePositions(Request $request){
        if($request->ajax()){
            try{
                $table = $request->table;
                $positions = $request->positions;
        
                foreach($positions as $position){
                    $index = $position[0];
                    $newPosition = $position[1];
        
                    DB::table($table)->where('id', $index)->update(["position" => $newPosition]);
                }
    
                return response()->json(true);
            }catch(Exception $err){
                return response()->json($err->getMessage());
            }
        }
    }

    public function destroyMultiPhoto(Request $request){
        if($request->ajax()){
            $multiPhoto = MultiPhoto::findOrFail($request->id);

            $imagePath = public_path($multiPhoto->image);
            if(file_exists($imagePath)) {
                @unlink($imagePath);
            }
            
            $multiPhoto->delete();

            return response()->json(true);
        }
    }

    public function destroyBlogPhoto(Request $request){
        if($request->ajax()){
            $Blogphoto = Blogphoto::findOrFail($request->id);

            $imagePath = public_path($Blogphoto->image);
            if(file_exists($imagePath)) {
                @unlink($imagePath);
            }
            
            $Blogphoto->delete();

            return response()->json(true);
        }
    }
}
