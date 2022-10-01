<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\{ServiciosController,ClientesController,AgendaController,UsuariosController,TestController};


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home.index');
//va al controlador HomeController y ejecuta metodo 'index'

Route::get('/login', [HomeController::class, 'login'])->name('home.login');
//va al controlador HomeController y ejecuta la accion 'login'

Route::get('/servicios', [ServiciosController::class, 'index']);
Route::get('/agenda', [AgendaController::class, 'index']);
Route::get('/clientes', [ClientesController::class, 'index']);
Route::get('/test', [TestController::class, 'index'])->name('test.index');


Route::post('/usuarios/login', [UsuariosController::class, 'login'])->name('usuarios.login');
Route::get('/usuarios/logout', [UsuariosController::class, 'logout'])->name('usuarios.logout');

