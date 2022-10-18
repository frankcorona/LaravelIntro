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

Route::get('/', function () {
    return view ('home');
})->name('home');


Route::get('blog', function () {
    // consulta a base de datos
    $posts = [
        ['id' => 1, 'title' => 'PHP',       'slug' => 'php' ],
        ['id' => 2, 'title' => 'Laravel',   'slug' => 'Laravel' ]
    ];

    return view ('blog', ['posts' => $posts]);

})->name('blog');

Route::get('blog/{slug}', function ($slug) {
    //Consulta a la base de datos
    $post = $slug;

    return view('post', ['post' => $post]);
})->name('post');