<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    return view('ui');
});

//Show register/create form
Route::get('/register', [usercontroller::class, 'create']);

// show speakerform
Route::get('/speaker', [usercontroller::class, 'speaker']);

// show login form
Route::get('/login', [usercontroller::class, 'login']);

// create account
Route::get('/form', [usercontroller::class, 'form']);

// talk form
Route::get('/talk', [usercontroller::class, 'talk']);

// ticket
Route::get('/ticket', [usercontroller::class, 'ticket']);

// purchase
Route::get('/purchase', [usercontroller::class, 'purchase']);

// contacts
Route::get('/contacts', [usercontroller::class, 'contacts']);

// teeser
Route::get('/youtube', [usercontroller::class, 'youtube']);

// sign in
Route::get('/signin', [usercontroller::class, 'signin']);

// signup
Route::get('/signup', [usercontroller::class, 'signup']);