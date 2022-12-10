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
    return view('inicio');
})->name('inicio');

Route::get('/custom', function () {
    $msj2 = "Mensaje desde el servidor *-*";
    return view('custom',['msj' => $msj2]);
});
Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');


