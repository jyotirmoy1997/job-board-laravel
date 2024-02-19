<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'heading' => 'Job Listings',
        'listings' => [
            [
                'title' => 'SDE-1',
                'description' => 'Work in Backend',
                'salary' => '$80000'
            ],
            [
                'title' => 'SDE-2',
                'description' => 'Work in Backend',
                'salary' => '$120000'
            ]
        ]
    ]);
});
