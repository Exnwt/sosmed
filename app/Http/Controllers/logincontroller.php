<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Users;


class logincontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     *      * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
 
    }

        public function regis()
        {
            return view('regis');
        }   

        public function registration(Request $request)
        {
            // dd($request->all());
            $users = Users::where('username', $request->username)->first();
            if($users) return redirect()->back()->with('error','username already register');
        
            $users = new Users;
            $users->username = $request->username;
            $users->Password = bcrypt($request->password);
            $users->save();

            return redirect('/login');
        } 
        
        public function login(){
            return view('/login ');
        }

        public function loginp(Request $request){
            if(Auth::attempt($request->only('username','password'))){
                Return redirect('/dashboard');
        }
        return redirect('/login');
        }
}   

    
    
