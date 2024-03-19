<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index() {
        
        return view('home.home');
    }

    public function store(Request $request) {

        /* return back()
        ->with('essai','essai value')
        ->withErrors([
            'name'=>'invalide'
        ])
        ->withInput([
            'name'=>'okokdoede'
        ])
        
        ; */

       /*  Mail::send(new SenderMail('doe'));

        return back(); */
        //return (new UserMail())->render();
        //return back();
        
        

    }

    public function error() {

        return view('home.404');
    }
}
