<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardcontroller extends Controller
{
    public function home(){
        return view('/dashboard');
    }

    public function post(Request $request){
        
    }
}
