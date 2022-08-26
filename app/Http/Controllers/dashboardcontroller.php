<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use App\Models\Users;
use App\Models\Comment;
use App\Models\User;
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
        // $posts = Post::with('comment')->();
        return view('comment');
    }

    public function commentid($id)
    {
        $post = Post::where('id',$id)->with('comments.userm')->first();

        return view('comment')->with('post',$post);;
    }


    public function savcom(Request $request,$id)
    {
        $comms = new Comment;
        $comms->user_id =Auth::user()->id;
        $comms->post_id = $id;
        $comms->body = $request->comss;
        $comms->save();

        return redirect('comment/'.$id);
    }

    public function dele($id){
        $ded = Comment::find($id);
        $ded->delete();
        return redirect()->back();
    }

}
    