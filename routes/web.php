<?php

use App\Http\Controllers\AdminController;
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

Route::get('/',[AdminController::class,"index"]);
Route::get('/admin',[AdminController::class,"index"]);
Route::get('/admin/kamar',[AdminController::class,"kamar"]);
Route::get('/admin/penyewa-aktif',[AdminController::class,"aktif"]);
Route::get('/admin/riwayat-penyewa',[AdminController::class,"riwayat"]);
Route::get('/admin/tambah-penyewa',[AdminController::class,"tambah"]);
Route::get('/admin/laporan',[AdminController::class,"laporan"]);
