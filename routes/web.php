<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

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



Route::resource('productos', ProductoController::class);

// Ruta para la página de inicio
Route::get('/', function () {
    return view('productos/create');
})->name('productos');


// Rutas para la gestión de productos
Route::resource('productos', ProductoController::class);

// Ruta para la página de inicio de sesión
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
