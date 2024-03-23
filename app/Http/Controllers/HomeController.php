<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Network;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{

    /* public function __construct() {

        $this->authorize('viewAny2',Home::class);
    } */


    public function index(Request $request) {
        
       //Session::flash('message2','okok');
        dump(Session::get('message'));
    //$response=Auth::user()->can('viewAny2',Home::class);

    //$response=$this->authorize('viewAny2',Home::class);

    
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
