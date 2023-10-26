<?php

use App\Http\Controllers\usuarioController;
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

Route::get('/', function () {
    return view('index');
});

Route::view('/login','login')->name('login');
Route::view('/register','register')->name('register');

#CONTROLLERS
Route::resource('ctlrUsuarios', usuarioController::class)->only('store');

Route::get('/confirmarUsuario', [usuarioController::class, 'search']);
Route::get('/desconectarCuenta', [usuarioController::class, 'logOut']);