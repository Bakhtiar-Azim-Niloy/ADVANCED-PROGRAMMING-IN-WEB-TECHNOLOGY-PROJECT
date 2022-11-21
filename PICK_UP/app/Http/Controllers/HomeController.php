<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index(){
        $message = "Welcome";
        return view('home')->with('message', $message);
    }
}
