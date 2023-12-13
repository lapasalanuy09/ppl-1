<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\PendaftaranpkkmbController;
use App\Http\Controllers\DataKegiatanController;
use App\Http\Controllers\DetailkegiatanController;
use App\Http\Controllers\RegisterController;
use App\Http\Middleware\CheckRole;
use RealRashid\SweetAlert\Facades\Alert;


Route::get('/', function () {
    return view('home');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/postlogin', 'postlogin');
    Route::get('/logout', 'logout');

});

Route::controller(RegisterController::class)->group(function () {
    Route::get('/daftar', 'register')->name('register');
    Route::post('/daftar', 'store')->name('daftar');
});

Route::group(['middleware'=>['auth','checkRole:admin']], function(){
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/pendaftaran-mahasiswa', [PendaftaranController::class, 'index'])->name('pendaftaran');
    Route::post('/pendaftaran-mahasiswa/create', [PendaftaranController::class, 'create']);
    Route::get('/pendaftaran-mahasiswa/{no_pendaftaran}/edit', [PendaftaranController::class, 'edit']);
    Route::post('/pendaftaran-mahasiswa/{no_pendaftaran}/update', [PendaftaranController::class, 'update']);
    Route::get('/pendaftaran-mahasiswa/{no_pendaftaran}/delete',  [PendaftaranController::class, 'delete']); 
    Route::get('/pendaftaran-mahasiswa/{no_pendaftaran}/profile',  [PendaftaranController::class, 'profile']);
    Route::get('/data-kegiatan', [DataKegiatanController::class, 'index']);
    Route::post('/data-kegiatan/create', [DataKegiatanController::class, 'create']);
    Route::get('/data-kegiatan/{id}/edit', [DataKegiatanController::class, 'edit']);
    Route::post('/data-kegiatan/{id}/update', [DataKegiatanController::class, 'update']);
    Route::get('/data-kegiatan/{id}/delete',  [DataKegiatanController::class, 'delete']);

});

Route::group(['middleware'=>['auth','checkRole:admin,user']], function(){
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('pendaftaranpkkmb',[PendaftaranpkkmbController::class, 'index']);
    Route::get('/pendaftaran_pkkmb/daftar',[PendaftaranpkkmbController::class, 'create']);
    Route::post('/pendaftaran_pkkmb/daftar',[PendaftaranpkkmbController::class, 'store']);
    Route::get('/detail-kegiatan', [DetailkegiatanController::class, 'index']);

});
