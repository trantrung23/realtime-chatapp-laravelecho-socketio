<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chatroom;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
    public function index () {
        $data = ['user' => Auth::user(), 'rooms' => Chatroom::all()];
        return view('app', ['data' => $data]);
    }
}