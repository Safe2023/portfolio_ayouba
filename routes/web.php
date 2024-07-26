<?php

use App\Http\Controllers\PortfController;
use App\Http\Controllers\Projet1Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Route::get('/', function () {
    return view('index');
});
Route::get('/apropos', function () {
    return view('apropos');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/service', function () {
    return view('service');
});
Route::get('/contact', function () {
    return view('contact');
});



Route::post('/contact', [PortfController::class,'envoyerEmail'])->name('envoyer.email');




Route::get('/essai', function () {
    return view('essai');
});
