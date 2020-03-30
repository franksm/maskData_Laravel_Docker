<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hello_world extends Controller
{
    public function show(){
        return view('hello_world');
    }
}
