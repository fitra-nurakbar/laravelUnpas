<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CobaController;


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
    return view('welcome');
});

Route::controller(CobaController::class)->group(function(){
    Route::get('/home', 'home');
    Route::get('/about', 'about');
    Route::get('/blog', 'index');
    Route::get('/blog/{post:slug}', 'detail');
});


