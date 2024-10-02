<?php

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

Route::get('/', function() {
    $title = 'Homepage Laravel Primi Passi';
    $message = 'Pagina principale';
    
    return view('pages.contacts', compact('title', 'message'));
})->name('homepage');

Route::get('/about', function() {
    $title = 'About Us';
    $message = 'Lorem ipsum dolor sit amet';
    
    return view('pages.contacts', compact('title', 'message'));
})->name('about');

Route::get('/contacts', function() {
    $title = 'Contatti';
    $message = 'Contattaci per ricevere le nostre ultime notizie.';
    
    return view('pages.contacts', compact('title', 'message'));
})->name('contacts');
