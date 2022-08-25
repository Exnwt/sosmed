<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use App\Models\Users;
use Auth;

class dashboardcontroller extends Controller
{
    public function home(){
        $posts = Post::with('authorObj')->get();

        return view('/dashboard')->with('posts',$posts);

    }

    public function post(Request $request){
        $post = new Post;
        $post->author= Auth::user()->id;
        $post->content = $request->content;
        $post->save();

        return redirect('/dashboard');
    }

    
    public function comment()
    {
        return view('comment');
    }

    public function savcom(Request $request)
    {
        $comms = Post::with('comments')->get();
        
        $users = new Users;
        $users->username = $request->username;
        $users->Password = bcrypt($request->password);
        $users->save();

        return redirect('/');
    } 
}
