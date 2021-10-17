<?php

use App\Http\Livewire\HelloWorld;
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
})->name('welcome');

Route::get('/counter', function () {
    return view('counter.counter');
})->name('counter');

Route::get('/hello-world', function () {
    return view('hello-world.hello-world');
})->name('hello-world');

Route::get('/contact-form/contact-form-success', function () {
    return view('contact-form.contact-form-success');
})->name('contact-form-success');

Route::get('/contact-form', function () {
    return view('contact-form.contact-form');
})->name('contact-form');

