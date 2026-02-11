<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;

Route::get('/', function () {
    return Inertia::render('welcome', [
        'canRegister' => Features::enabled(Features::registration()),
    ]);
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::view('/jogos','jogos');// retorna uma "view"

// agora parar retorna um texto
// Route::get('/jogos', function(){
//     return "Curso de LARAVEL";
// });

// pegando parametro e enviando parametros
Route::view('/jogos','jogos',['name'=>'Caique']);

require __DIR__.'/settings.php';
