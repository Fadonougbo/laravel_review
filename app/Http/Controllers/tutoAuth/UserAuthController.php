<?php

namespace App\Http\Controllers\tutoAuth;

use App\Http\Controllers\Controller;
use App\Http\Requests\tutoAuth\UserAuthRequest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAuthController extends Controller
{
    

    public function login() {

        $firstPost=Post::create([
            'title'=>'1essai',
            'content'=>'1content'
        ]);

        dump($firstPost->title);
       
        return view('tutoAuth.login');
    }

    public function doLogin(UserAuthRequest $request) {


        $data=$request->validated();

        $isLogin=Auth::attempt($data);
        
        if(!$isLogin) {
            return redirect()->route('user.auth.login')->with('error','utilisateur non connecter');
        }

        $request->session()->regenerate();
        $request->session()->regenerateToken();
        
        return redirect()->intended(route('home'))->with('success','vous etes connecté');


    }

    public function create() {

        return view('tutoAuth.create');
    }

    public function doCreate(UserAuthRequest $request) {

        $data=$request->validated();
       

        $user=User::create($data);

        if(!$user) {
            return redirect()->route('user.auth.create')->with('error','utilisateur non creer');
        }

        $isLogin=Auth::attempt($data);
        
        if(!$isLogin) {
            return redirect()->route('user.auth.login')->with('error','utilisateur non connecter');
        }

        $request->session()->regenerate();
        $request->session()->regenerateToken();
        
        return redirect()->route('home')->with('success','vous etes connecté');
        

    }

    public function logout(Request $request) {

        if(!Auth::check()) {
            return redirect()->route('user.auth.login');
        }

        Auth::logout();

        $request->session()->invalidate();
 
        $request->session()->regenerateToken();

       

        return redirect()->route('user.auth.login');
    }

    public function logoutOnAll(Request $request) {

        if(!Auth::check()) {
            return redirect()->route('user.auth.login');
        }

        $user=Auth::logoutOtherDevices('gaut');

        $request->session()->invalidate();

        Auth::loginUsingId($user->id);

        $request->session()->regenerateToken();
        $request->session()->regenerate();
        
        //Auth::login($user)
        //AUth::attemptWhere([])
        //dd($response);

        return redirect()->route('home');
    }
}
