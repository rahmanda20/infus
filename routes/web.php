<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\infuscontroller;
use App\Http\Controllers\dashboardcontroller;
use App\Http\Controllers\WifiConfigController;
use App\Http\Controllers\WebSocketController;
use App\Http\Controllers\NodemcuLogController;


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


Route::get('/master', [infuscontroller::class, 'master']);
Route::get('/tabel', [infuscontroller::class, 'index']);
Route::put('/data/{id}', [infusController::class, 'update'])->name('data.update');
Route::delete('/data/{mac}', [infuscontroller::class, 'destroy'])->name('data.destroy');
Route::get('/data/refresh', 'InfusController@refresh')->name('data.refresh');
Route::get('/', [infuscontroller::class, 'page']);
Route::get('/login', [infuscontroller::class, 'login']);
Route::get('/dashboard', [dashboardcontroller::class, 'dashboard']);
Route::get('/rekap', [dashboardcontroller::class, 'rekap']);

Route::get('/create', [dashboardcontroller::class, 'create']);
Route::post('/store', [dashboardcontroller::class, 'store']);
Route::get('/tampil', [dashboardcontroller::class, 'index']);
Route::get('/pasien', [dashboardcontroller::class, 'pasien']);
Route::post('/tambahpasien', [dashboardcontroller::class, 'tambahpasien']);





Route::get('/pengaturan', [WifiConfigController::class, 'index']);
Route::post('/tambahwifi', [WifiConfigController::class, 'store']);

Route::get('/start-server', [WebSocketController::class, 'startServer']);
