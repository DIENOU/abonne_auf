<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\myController;
use App\Http\Controllers\yesController;

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


Route::get('/home', function () {
    return view('home');
});


Route::get('/admin', function () {
    return view('admin');
});


Route::get('/auth', function () {
    return view('auth');
});


Route::get('/acueil', function () {
    return view('acueil');
});


Route::get('/enregistre', function () {
    return view('enregistre');
});

Route::get('/lister', function () {
    return view('lister');
});


Route::get('myurl',[myController::class, 'index']);


 Route::get('okuri',
 [yesController::class, 'index']);


 Route::get('/enregistre', function () {
    return view('enregistre');
});


