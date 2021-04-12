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


Route::get('Registrate', 'PageControllerX@notas')->name('notas');
Route::post('Registrate', 'PageControllerX@crear')->name('notas.crear');
Route::get('/inicio', 'PageControllerX@principal')->name('principal');

Route::get('Detalle/UserID_{id}', 'PageControllerX@detalle')->name('notas.detalle');
Route::get('/Editar/{id}', 'PageControllerX@editar')->name('notas.editar');
Route::put('/EditarNota/{id}','PageControllerX@update')->name('notas.update');
Route::delete('eliminar/{id}', 'PageControllerX@eliminar')->name('notas.eliminar');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
