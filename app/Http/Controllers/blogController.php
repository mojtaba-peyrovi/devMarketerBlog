<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class blogController extends Controller
{
    public function getSingle($slug){



        $post = Post::where('slug','=', $slug)->first();  //because we only have one record as it is unique we dont need to use get, we just use first.


        return view('blog.single',compact('post'));
    }
}
