<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutorizarController;

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
    return view('auth.login');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/Autorizaciones',[App\Http\Controllers\AutorizarController::class, 'index'])->name('index');

Route::get('Prestamo', function () {
    return view('Prestamo.index');
});
Route::get('Listas', function () {
    return view('Listas.index');
});
Route::get('Autorizaciones', function () {
    return view('Autorizaciones.index');
});
Route::get('Aval', function () {
    return view('Aval.index');
});
Route::get('Pagare', function () {
    return view('Pagare.index');
});
