<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Users;
use Auth;

class dashboardcontroller extends Controller
{
    public function home(){
        return view('/dashboard');
    }

    public function post(Request $request){
        $post = new Post;
        $post->author= Auth::user()->id;
        $post->content = $request->content;
        $post->save();

        return redirect('/dashboard');
    }

    
    public function showPost($id)
    {
        // $data = Post::where('id',$id)->with('comments.user')->first();

        return view('show')->with('data',$data);
    }
}
