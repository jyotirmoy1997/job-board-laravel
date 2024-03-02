<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;
use App\Http\Controllers\UserController;

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

// Home Route
Route::get('/', [HomeController::class, 'index']);

// All Listings Route
Route::get('/listings', [ListingController::class, 'index']);

// Load Create Listing Form
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

// Create Listing
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

// Show Edit Form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

// Update Listing
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

// Delete Listing
Route::delete('/listings/{listing}', [ListingController::class, 'delete'])->middleware('auth');

// Single Listing Route
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Show Register/Create Form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// User Logout Form
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Login User
Route::post('/users/auth', [UserController::class, 'auth']);

// Create New User
Route::post('/users', [UserController::class, 'store']);