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
    return view('index');
});

Route::get('/unitiendas', function () {
    return view('unitiendas');
})->name('unitiendas');

Route::get('/servitienda', function () {
    return view('servitiendas');
})->name('servitienda');

Route::get('/mercabal', function () {
    return view('mercabal');
})->name('mercabal');

Route::get('/bodegas', function () {
    return view('bodegas');
})->name('bodegas');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
