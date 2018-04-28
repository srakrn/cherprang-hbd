<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function wishes(){
        return \App\Wish::where('hidden', 0)->get();
    }
}
