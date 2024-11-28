<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function itBlog(){
        return view('front.Blog');
    }

    public function blogItem($id){
        return view('front.Blog-post');
    }
}
