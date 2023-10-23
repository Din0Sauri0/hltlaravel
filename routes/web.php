<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('', function () {
    return view('index');
});
Route::get('/mausoleo-de-historias', function () {
    return view('mausoleo');
})->name('mausoleo-de-historias');
Route::get('/sabias-que', function () {
    return view('blog');
})->name('sabias-que');
Route::get('/club-lloron', function () {
    return view('club-lloron');
})->name('club-lloron');
Route::get('/login', function () {
    return view('login');
})->name('ingreso');
Route::get('/registro', function () {
    return view('registro');
})->name('resgistro');
Route::get('/sepulturero', function () {
    return view('sepulturero');
})->name('sepulturero');
Route::get('/cuentanos-tu-historia', function () {
    return view('cuentanos-tu-historia');
})->name('cuentanos-tu-historia');
