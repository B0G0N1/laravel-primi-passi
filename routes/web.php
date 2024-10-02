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

// Definisce la route per la homepage, utilizzando una funzione anonima.
// Viene passato il titolo e il messaggio alla vista 'home'.
Route::get('/', function() {
    $title = 'Homepage Laravel Primi Passi'; // Titolo della pagina
    $message = 'Pagina principale'; // Messaggio della pagina
    
    // Restituisce la vista 'home' con le variabili 'title' e 'message'
    return view('home', compact('title', 'message'));
})->name('homepage'); // Nome della route


// Definisce la route per la pagina "About Us".
Route::get('/about', function() {
    $title = 'About Us';
    $message = 'Lorem ipsum dolor sit amet';
    
    return view('pages.about', compact('title', 'message'));
})->name('about');


// Definisce la route per la pagina dei contatti.
Route::get('/contacts', function() {
    $title = 'Contatti';
    $message = 'Contattaci per ricevere le nostre ultime notizie.';
    
    // Restituisce la vista 'pages.contacts' con le variabili 'title' e 'message'
    return view('pages.contacts', compact('title', 'message'));
})->name('contacts');
