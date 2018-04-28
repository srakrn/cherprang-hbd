<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $wishes = \App\Wish::where('hidden', 0)->orderBy('created_at', 'desc')->get();
        return view('wishes', ['wishes' => $wishes]);
    }

    public function newPostPage()
    {
        return view('post');
    }
    
    public function savePost(Request $request){
        $wish = \App\Wish::create($request->all());
        $wishes = \App\Wish::where('hidden', 0)->orderBy('created_at', 'desc')->get();
        return redirect('/');
    }
}
