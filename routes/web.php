<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'PageControllerX@inicio');

Route::get('fotos/{numero?}','PageControllerX@fotos')->where('numero', '[0-9]+');

Route::view('casa', 'index',[ 'numero'=>125]) ->name('home');
Route::view('miblog', 'blog')->name('principal');

Route::get('nosotros/{nombre?}','PageControllerX@nosotros')->name('about');


Route::get('notas', 'PageControllerX@notas')->name('notas');
Route::get('Detalle/Nota{id}', 'PageControllerX@detalle')->name('notas.detalle');
Route::post('notas', 'PageControllerX@crear')->name('notas.crear');
Route::get('/Editar/{id}', 'PageControllerX@editar')->name('notas.editar');
Route::put('/EditarNota/{id}','PageControllerX@update')->name('notas.update');
Route::delete('eliminar/{id}', 'PageControllerX@eliminar')->name('notas.eliminar');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
