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

Route::view('/home', 'home')->name('home');
Route::view('/login','login')->name('login');
Route::view('/register','register')->name('register');
Route::view('/perfil-profe','perfil-profe')->name('perfil-profe');
Route::view('/perfil-estu','perfil-estu')->name('perfil-estu');
Route::view('/camara','camara')->name('camara');
Route::view('/camara-profe','camara-profe')->name('camara-profe');
Route::view('/camara-estu','camara-estu')->name('camara-estu');

#CONTROLLERS
Route::resource('ctlrUsuarios', usuarioController::class)->only('store');

Route::get('/confirmarUsuario', [usuarioController::class, 'search']);
Route::get('/desconectarCuenta', [usuarioController::class, 'logOut']);
