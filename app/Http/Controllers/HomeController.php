<?php

namespace App\Http\Controllers;

use App\Mail\SenderMail;
use App\Models\Network;
use App\Models\Post;
use App\Models\Sender;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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

        Mail::send(new SenderMail('doe'));

        return back();
        //return (new UserMail())->render();
        //return back();
        
        

    }

    public function error() {

        return view('home.404');
    }
}
