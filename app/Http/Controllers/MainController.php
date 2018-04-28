<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $wishes = \App\Wish::where('hidden', 0)->get();
        return view('index', ['wishes' => $wishes]);
    }
}
