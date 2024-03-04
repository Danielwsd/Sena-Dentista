<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;

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
    return view('home');
})->name('home');

Route::get('registro', [UserController::class, 'create'])->name('registro.create');
Route::post('registro', [ UserController::class, 'store'])->name('registro.store');

Route::get('login', [LoginController::class, 'create'])->name('login.create');
Route::post('login', [ LoginController::class, 'store'])->name('login.store');
Route::get('logout', [ LoginController::class, 'destroy'])->name('login.destroy');


Route::get('tratamientos', function () {
    return view('tratamientos');
})->name('tratamientos');