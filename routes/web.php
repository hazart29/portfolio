<?php

use App\Http\Controllers\link;
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
    return view('frontend.home');
})->name('home');

Route::get('/aboutme', [link::class, 'index'], function () {
    return view('frontend.about');
})->name('about');

Route::get('/myportfolio', function () {
    return view('frontend.personal');
})->name('myportfolio');

Route::get('/myacademy', function () {
    return view('frontend.academy');
})->name('myacademy');

Route::get('/myskill', function () {
    return view('frontend.skill');
})->name('myskill');

Route::get('/myproject', function () {
    return view('frontend.project');
})->name('myproject');

Route::get('/moreinfo', function () {
    return view('frontend.moreinfo');
})->name('moreinfo');
