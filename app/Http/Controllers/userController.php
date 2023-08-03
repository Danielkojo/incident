<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('check.row');
    }
    public function page3(){
        return view('user.home');
    }

  
}
