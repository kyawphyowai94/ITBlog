<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class FrontController extends Controller
{
    public function itBlog(){

        $posts = Post::orderBy('id','DESC')->paginate(9);
        //var_dump($posts);
        return view('front.Blog',compact('posts'));
    }

    public function blogItem($id){
        
        $post = Post::find($id);
        return view('front.Blog-post',compact('post'));
    }
}
