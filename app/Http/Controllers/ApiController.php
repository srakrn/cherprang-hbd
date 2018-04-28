<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public static function list(){
        return \App\Wish::where('hidden', 0)->orderBy('created_at', 'desc')->get();
    }
    
    public function save(Request $request){
        $wish = \App\Wish::create($request->all());
        return $wish;
    }
}
