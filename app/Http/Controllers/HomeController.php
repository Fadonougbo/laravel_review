<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Sender;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Route;

class HomeController extends Controller
{
    public function index(Request $request) {
        
       

        $senders=Sender::limit(15)->get();

        foreach($senders as $sender) {
            dump($sender->network?->name);
        }

        return view('home.home');
    }

    public function error() {

        return view('home.404');
    }
}
