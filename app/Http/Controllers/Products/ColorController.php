<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Colors;

class ColorController extends Controller{
    public function delete (Request $request){
        try{
            if(!is_numeric($request->colorId))
                return response()->json(["ok" => false, "exception" => "non-numeric Id sended"]);
            $color = Colors::findOr($request->colorId, function(){
                return false;
            });
            if(!$color){
                return response()->json(["ok" => false, "exception" => "color not founded"]);
            }
            $color->delete();
            return response()->json(["ok" => true]);
        }
        catch(\Exception){
            return response()->json(["ok" => false, "exception" => "not allowed"]);
        }
    }
}
