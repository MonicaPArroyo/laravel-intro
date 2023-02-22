<?php

use Illuminate\Support\Facades\Route;

/**
 * Route::get       | Consultar
 * Route::post      | Guardar
 * Route::delete    | Eliminar
 * Route::put       | Actualizar
 */

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('blog', function () {
    $post = [
        ['id' =>'1', 'title' => 'PHP',     'slug' => 'php'],
        ['id' =>'2', 'title' => 'Laravel', 'slug' => 'laravel'],
    ];
    return view('blog', ['posts' => $post]);
})->name('blog');

Route::get('blog/{slug}', function ($slug) {
    // Simular consulta a base de datos
    $post = $slug;
    return view('post', ['post' => $post]);
})->name('post');
