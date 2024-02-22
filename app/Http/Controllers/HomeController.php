<?php

namespace App\Http\Controllers;

use App\Models\Network;
use App\Models\Post;
use App\Models\Sender;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Route;

class HomeController extends Controller
{
    public function index(Request $request) {
        
       

        //$senders=Sender::limit(15)->get();
        $networks=Network::with('senders')->get();


        foreach($networks as $network) {

            dump($network->senders);
        }

        /* foreach($senders as $sender) {
            dump($sender->network?->name);
        } */

        return view('home.home');
    }

    public function error() {

        return view('home.404');
    }
}
