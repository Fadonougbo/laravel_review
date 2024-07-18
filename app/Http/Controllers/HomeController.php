<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Network;
use App\Models\Post;
use App\Models\Sender;
use App\Models\User;
use App\Notifications\TestNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Facades\App\Man;
use Illuminate\Queue\Jobs\Job;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Queue;
use Illuminate\Support\Lottery;

class HomeController extends Controller
{


    public function index(Request $request) {
        
        //$url = action([HomeController::class, 'index']);
        
        $user=(User::first());

       
        //echo "salut";
        //$user->notify(new TestNotification());
        
        Notification::route('mail','doe2@doe.com')->notify(new TestNotification());

        //dump($user->notifications[0]->type);

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
