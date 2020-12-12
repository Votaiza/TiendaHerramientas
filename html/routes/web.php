<?php

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\TiendaController;
use Illuminate\Support\Facades\Auth;
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
/*
Route::get('/', function () {

    return view('tienda.index');
}); */



Route::get('/', 'TiendaController@index');

Route::resource('productos', 'ProductoController')->middleware('auth');

Route::resource('rubros', 'RubroController');

Route::resource('tienda', 'TiendaController');

//Route::get('/carrito', 'CarritoDetalleController');

Route::resource('carrito', 'CarritoDetalleController');

Route::get('carrito-addCart/{id}', 'CarritoDetalleController@addCart')->name('carrito-addCart');

Auth::routes();

//Route::get('/home', 'TiendaController@index')->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//
