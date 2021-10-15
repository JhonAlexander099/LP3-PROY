<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\DetalleReclamoController;
use App\Http\Controllers\ReclamoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\EmpresaController;

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

Route::get('/', function () {
    return view('welcome');
})->name("inicio");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('usuarios',UsuarioController::class);
Route::get('/reclamo/mostrar', [ReclamoController::class, 'mostrar'])->middleware(['auth']);
