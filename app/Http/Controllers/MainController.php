<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $wishes = \App\Wish::where('hidden', 0)->orderBy('created_at', 'desc')->get();
        return view('index', ['wishes' => $wishes]);
    }
}
