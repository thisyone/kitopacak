<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\firstController;

Route::get('/',[firstController::class, 'index']);
Route::get('/about',[firstController::class, 'index2']);
Route::get('/contact',[firstController::class, 'index3']);
Route::get('/login',[firstController::class, 'index4']);
Route::get('/register',[firstController::class, 'index5']);



// Route::get('/', function () {
//     return view('home');
// });


// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });

// Route::get('/register', function () {
//     return view('register');
// });

// Route::get('/login', function () {
//     return view('login');
// });

