<?php

use App\Http\Controllers\materiaController;
use App\Http\Controllers\publicacionController;
use App\Http\Controllers\usuarioController;
use App\Models\materia;
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

#Rutas dentro del servicio (Salas, index, perfiles, etc.)
// General
    Route::get('/', function () {
        return view('intranet.index');
    })->name('index');
    // Route::view('/camara','intranet.camara')->name('camara');
// Profesor
    Route::view('/camara-profe','intranet.profesor.camara-profe')->name('camara-profe');
    Route::view('/perfil-profe','intranet.profesor.perfil-profe')->name('perfil-profe');
    Route::view('/publicarclase','intranet.profesor.publicar-clase')->name('publicar-clase');
// Alumno
    Route::view('/camara-estu','intranet.estudiante.camara-estu')->name('camara-estu');
    Route::view('/perfil-estu','intranet.estudiante.perfil-estu')->name('perfil-estu');
    Route::view('/buscarclase','intranet.estudiante.buscar-clase')->name('buscar-clase');


#Rutas para el inicio fuera del servicio (Home, login, registro, quienes somos, etc.)
Route::view('/home', 'inicio.home')->name('home');
Route::view('/login','inicio.login')->name('login');
Route::view('/register','inicio.register')->name('register');
Route::view('/nosotros','inicio.nosotros')->name('nosotros');
Route::view('/barProfe','inicio.barProfe')->name('barProfe');
Route::view('/barEstu','inicio.barEstu')->name('barEstu');
Route::view('/buscarProfe','inicio.buscarProfe')->name('buscarProfe');





#CONTROLLERS
Route::resource('ctlrUsuarios', usuarioController::class)->only('store');
// Route::resource('ctlrMaterias', materiaController::class);
Route::resource('ctlrPublicacion', publicacionController::class);

Route::get('/confirmarUsuario', [usuarioController::class, 'search']);
Route::get('/desconectarCuenta', [usuarioController::class, 'logOut']);
