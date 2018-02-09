<?php
namespace App\Http\Controllers;

use App\Post;

class pageController extends Controller{

    public function getIndex(){

        $posts = Post::orderBy('created_at','DESC')->limit(4)->get();

        return view('pages.welcome',compact('posts'));

    }


    public function getAbout(){

        return view('pages.about');

    }


    public function getContact(){

        return view('pages.contact');

    }









}
