<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\HomePageController;
use Illuminate\Support\Facades\Auth;
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
//homepage
Route::get('/', [HomePageController::class, 'index'])->name('pegawai');
//Route Pegawai
Route::get('/dashboard', [HomeController::class, 'index'])->name('pegawai');
Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/pegawai/detail/{id_pegawai}', [PegawaiController::class, 'detail']);
Route::get('/pegawai/add', [PegawaiController::class, 'add']);
Route::post('/pegawai/tambah', [PegawaiController::class, 'tambah']);
Route::get('/pegawai/{pegawai}/edit', [PegawaiController::class, 'edit'])->name('pegawai.edit');
Route::put('/pegawai/{pegawai}', [PegawaiController::class, 'update'])->name('pegawai.update');
Route::delete('/pegawai/{pegawai}', [PegawaiController::class, 'delete'])->name('pegawai.delete');

//Route Surat Masuk 
Route::get('/suratmasuk', [SuratMasukController::class, 'index']);
Route::get('/suratmasuk/detail/{id_surat}', [SuratMasukController::class, 'detail']);
Route::get('/suratmasuk/add', [SuratMasukController::class, 'add']);
Route::post('/suratmasuk/tambah', [SuratMasukController::class, 'tambah']);
Route::get('/suratmasuk/download/{id_surat}', [SuratMasukController::class, 'download']);
Route::get('/suratmasuk/{suratmasuk}/edit', [SuratMasukController::class, 'edit'])->name('suratmasuk.edit');
Route::put('/suratmasuk/{suratmasuk}', [SuratMasukController::class, 'update'])->name('suratmasuk.update');
Route::delete('/suratmasuk/{suratmasuk}', [SuratMasukController::class, 'delete'])->name('suratmasuk.delete');

$ctrl = '\App\Http\Controllers';
Route::get('login',$ctrl.'\LoginController@view')->name('login');
Route::post('login',$ctrl.'\LoginController@authenticate')->name('login.auth');
Route::middleware('auth')->name('dashboard');
Route::post('logout',$ctrl.'\LoginController@logout')->name('logout');
