<?php

namespace App\Http\Controllers;

use App\Mail\UserMail;
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

       /*  return redirect()->route('home.store')
        ->with('','')
        ->withInput([
            'name'=>'okokdoede'
        ]); */

        Mail::send(new UserMail());
        //return (new UserMail())->render();
        return back();
        
        

    }

    public function error() {

        return view('home.404');
    }
}
