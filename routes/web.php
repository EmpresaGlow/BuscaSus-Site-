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

/* Paginas*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/analisar', function () {
    return view('analisar');
});

Route::get('/alterar', function () {
    return view('editar');
});

Route::get('/create', function () {
    return view('create');
});

Route::get('/menssagem', function () {
    return view('menssagem');
});

Route::get('/time', function () {
    return view('time');
});

Route::get('/delete', function () {
    return view('delete');
});

/* Paginas do crud */