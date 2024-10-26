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

Route::get('/productos', function () {
    return view('productos');
});

Route::get('/', function () {
    return view('home');
});



Route::get('/login', function () {
    return view('auth.login');
})->name('login');