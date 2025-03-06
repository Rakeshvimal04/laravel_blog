<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('index');
    }

    public function oldUrl(){
        return redirect()->route('newurl');
    }

    public function newUrl(){
        return "<h1>new url page</h1>";
    }
}
