<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request) {
        
        $post=Post::first()->pluck('title','content')->first();

        dump($post);

         

        return view('home.home');
    }
}
