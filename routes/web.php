<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CitizensController;
use Illuminate\Support\Facades\Auth;


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

Route::get('/', [HomeController::class, 'home'])
    ->name('home.index')
    //->middleware('auth')
    ;

Route::get('/contact', [HomeController::class, 'contact'])
    ->name('home.contact');

Auth::routes();

Route::resource('citizens', CitizensController::class)
    ->only(['create', 'store', 'show']);
