<?php

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


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ClientController;


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('client_form');
});
Route::post('/validateForm',  [ClientController::class, 'validateForm'])->name('validateForm');
