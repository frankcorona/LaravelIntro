<?php

use Illuminate\Http\Request;
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
    return 'Ruta Home';
});


Route::get('blog', function () {
    return 'Listado de publicaciones';
});

Route::get('blog/{slug}', function () {
    //Consulta a la base de datos

    return $slug;
});

Route::get('buscar', function (Request $request) {
    return $request->all();
});