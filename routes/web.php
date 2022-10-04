<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\
{
    GuruController,
    KelasController,
    MapelController,
    SiswaController,
    DashboardController,
    AuthController,
};


Route::get('/', function () {
    return view('layout.app');
});

//route login
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/postlogin', [AuthController::class, 'postlogin'])->name('login.postlogin');

//route logout
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware'=>'auth'], function(){
    
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    
    Route::get('/guru/data', [guruController::class, 'data'])->name('guru.data');
    Route::resource('/guru', GuruController::class);
    
    Route::get('/kelas/data', [kelasController::class, 'data'])->name('kelas.data');
    Route::resource('/kelas', KelasController::class);
    
    Route::get('/mapel/data', [MapelController::class, 'data'])->name('mapel.data');
    Route::resource('/mapel', MapelController::class);
    
    Route::get('/siswa/data', [siswaController::class, 'data'])->name('siswa.data');
    Route::resource('/siswa', SiswaController::class);

});