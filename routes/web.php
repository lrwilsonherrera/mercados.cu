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
    return view('unitiendas.index');
})->name('unitiendas');

Route::get('/servitienda', function () {
    return view('servitiendas.index');
})->name('servitienda');

Route::get('/mercabal', function () {
    return view('mercabal.index');
})->name('mercabal');

Route::get('/bodegas', function () {
    return view('bodegas.index');
})->name('bodegas');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
