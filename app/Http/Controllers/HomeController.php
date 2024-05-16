<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;


class HomeController extends Controller
{


    public function index(Request $request) {
        
      
        dump(Auth::user()->can('viewAny',Home::class));

        return view('home.home');
    }

    public function secret() {

        //Gate::allowIf(fn (User $user) => true);

        //Gate::authorize('see-secret-page','chine');

        

        $code=uniqid();
        return "Your code is {$code}";
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
