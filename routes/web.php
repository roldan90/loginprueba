<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Inicios;
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

Route::get('/', [AuthController::class, 'index'])->name('login');
Route::get('/crearUsuario', [AuthController::class, 'crearNuevoUsuario']);
Route::post('/logear', [AuthController::class, 'logear'])->name('logear');
Route::get('/logout',[AuthController::class, 'logout'])->name('logout');

Route::get('/inicio', [Inicios::class, 'index'])->name('inicio');   