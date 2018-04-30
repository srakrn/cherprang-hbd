<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public static function list(Request $request){
        if($request->all==1){
            return \App\Wish::orderBy('created_at', 'desc')->get();
        }
        else if($request->hidden==1){
            return \App\Wish::where('hidden', 1)->orderBy('created_at', 'desc')->get();
        }
        else{
            return \App\Wish::where('hidden', 0)->orderBy('created_at', 'desc')->get();
        }
    }
}
