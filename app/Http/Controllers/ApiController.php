<?php

namespace App\Http\Controllers;

use App\Http\Resources\SenderCollection;
use App\Http\Resources\SenderResource;
use App\Models\Sender;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index() {

        return new SenderCollection(Sender::limit(1)->get());
    }
}
