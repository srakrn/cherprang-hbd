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

    public function managePage()
    {
        return view('manage');
    }

    public function updatePost(Request $request){
        try{
            if(\Hash::check($request->username.":".$request->password, "\$2y\$10\$MjlSvxHIyyzHq18Vd7B/Eex6wpErTgVElNY3zM7//wqOrgi.XD3AC")){
                $wish = \App\Wish::FindOrFail($request->id);
                $wish->hidden = $request->hidden;
                $wish->save();
                return $wish;
            }
            else{
                return "Update failed";
            }
        }
        catch(ModelNotFoundException $e)
        {
            return "Update failed";
        }
    }
}
