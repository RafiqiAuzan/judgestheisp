<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Http\Request;
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
    return view('pages.landing');
})->name('landing');

Route::get('/aboutus', function () {
    return view('pages.aboutus');
})->name('about us');

Route::get('/hasilanalisis', function () {
    return view('pages.hasilanalisis');
})->name('hasilanalisis');

Route::get('/biznet', function () {
    return view('pages.providers.biznet');
})->name('biznet');

Route::get('/firstmedia', function () {
    return view('pages.providers.firstmedia');
})->name('firstmedia');

Route::get('/iconnect', function () {
    return view('pages.providers.iconnect');
})->name('iconnect');

Route::get('/indihome', function () {
    return view('pages.providers.indihome');
})->name('indihome');

Route::get('/myrepublic', function () {
    return view('pages.providers.myrepublic');
})->name('myrepublic');

Route::get('/mncplay', function () {
    return view('pages.providers.mncplay');
})->name('mncplay');