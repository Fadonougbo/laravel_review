<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request) {
 
        $method=strtolower($request->method());
        if( $method==="post") {
            dump($request->all());
        }

        dump($request->route()->named('home'));
        return view('home.home');
    }
}
