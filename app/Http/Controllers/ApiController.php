<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public static function getAll(){
        return \App\Wish::where('hidden', 0)->get();
    }
    
    public function save(Request $request){
        $wish = \App\Wish::create($request->all());
        return $wish;
    }
}
