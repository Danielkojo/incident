<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('check.row');
    }
    public function page1(){
        return view('user.index');
    }
}
