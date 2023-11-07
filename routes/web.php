<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormAmilController;
use App\Http\Controllers\FormAtasanController;
use App\Http\Controllers\LoginController;
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
    return view('welcome');
});
Route::get('/', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/form/{id}', [DashboardController::class, 'show']);
Route::get('/tambah-baru', [DashboardController::class, 'showTambahForm']);
Route::post('/tambah-baru', [DashboardController::class, 'tambahForm']);
Route::delete('/delete/form/{id}', [DashboardController::class, 'deleteForm']);

Route::get('/form/amil/{id}', [FormAmilController::class, 'index']);
Route::put('/edit/form/amil/{id}', [FormAmilController::class, 'update']);

Route::get('/form/atasan/{id}', [FormAtasanController::class, 'index']);
Route::put('/edit/form/atasan/{id}', [FormAtasanController::class, 'update']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);