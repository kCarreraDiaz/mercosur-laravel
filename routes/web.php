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
    return view('welcome');
});
Route::resource('paises','PaisController');//paises es la ruta que usare con sus metodos del Pais Controller
Route::resource('productos','ProductoController');//productos es la ruta que usare con sus metodos del Producto Controller
Route::resource('relacions','RelacionController');
