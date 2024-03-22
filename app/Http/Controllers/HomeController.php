<?php

namespace App\Http\Controllers;

use App\Models\Network;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index(Request $request) {

        /* $user=User::find(3);
       
        if(Gate::forUser($user)->allows('see-secret-page','benin')) {
            dump('ok');
        }else {
            dump('no');
        } */

        //dump($request->user()->can('viewAny'));

        if ($request->user()->can('viewAny')) {
            abort(403);
        }

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
