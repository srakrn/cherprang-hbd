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
        $this->validate($request, [
            'name' => 'required|max:50',
            'wish' => 'required|max:280'
        ], [
            'name.required' => 'ยังไม่ได้กรอกชื่อ',
            'wish.required' => 'ยังไม่ได้กรอกข้อความอวยพร',
            'name.max' => 'ชื่อยาวเกิน 50 ตัวอักษร',
            'wish.max' => 'คำอวยพรยาวเกิน 280 ตัวอักษร'
        ]);
        $wish = \App\Wish::create($request->all());
        return redirect('success')->with('wish', $wish);
    }
    
    public function successPost(\App\Wish $wish){
        return view('success')->with('wish', $wish);
    }

    public function managePage()
    {
        return view('manage');
    }

    public function updatePost(Request $request){
        if(\Hash::check($request->username.":".$request->password, "\$2y\$10\$MjlSvxHIyyzHq18Vd7B/Eex6wpErTgVElNY3zM7//wqOrgi.XD3AC")){
            try{
                $wish = \App\Wish::FindOrFail($request->id);
                $wish->hidden = $request->hidden;
                $wish->save();
                return redirect('manage')->with('status', "Managed post.");
            }
            catch(ModelNotFoundException $e){
                return redirect('manage')->with('status', "Indicated post not found.");
            }
        }
        else{
            return redirect('manage')->with('status', "Authentication failed.");
        }
    }
}
