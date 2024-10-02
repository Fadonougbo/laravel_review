<?php

namespace App\Http\Controllers;

use App\Models\Network;
use App\Models\Sender;
use Illuminate\Http\Request;


class HomeController extends Controller
{


    public function index() {

        //dump(Network::first()->getMedia());
        dump( (new Network())->first()->getFirstMedia('essaicollect'));
       
        return view('home.home',['model'=>(new Network())->first()]);
    }


    public function store(Request $request) {


        $file=$request->file('picture');

        $res=Network::first()->addMedia($file)
        ->withResponsiveImages()
        ->toMediaCollection('essaicollect')
        ;

        return redirect()->route('home');
        
    }

    public function secret() {

        //Gate::allowIf(fn (User $user) => true);

        //Gate::authorize('see-secret-page','chine');

        

        $code=uniqid();
        return "Your code is {$code}";
    }



    public function error() {

        return view('home.404');
    }
}
