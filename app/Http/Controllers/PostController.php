<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{
    public function index (Request $request) {
        
        //$response=Auth::user()->can('viewAny',Post::class);

        //$this->authorize('viewAny',Post::class);

        //Gate::authorize('viewAny',Post::class);

        return 'indexok';
    }
}
