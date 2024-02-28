<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;

class HomeController extends Controller
{
    // Return Home View
    public function index(){
        return view('home', [
            'listings' => Listing::all()
        ]);
    }
}
