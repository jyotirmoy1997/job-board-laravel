<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Return Home View
    public function index(){
        return view('home');
    }
}
