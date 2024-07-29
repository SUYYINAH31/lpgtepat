<?php

use Illuminate\Support\Facades\Route;
//login
use App\Http\Controllers\AuthController;
//endlogin
//agen
use App\Http\Controllers\agen\dashboardController;
use App\Http\Controllers\agen\userController;
use App\Http\Controllers\agen\pangkalanController;
//panglakan
use App\Http\Controllers\pangkalan\cekNikController;
use App\Http\Controllers\pangkalan\laporanController;
use App\Http\Controllers\pangkalan\produkController;
use App\Http\Controllers\pangkalan\mainController;


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

Route::controller(AuthController::class)->group(function () {
    Route::get('login', 'login')->name('login');
    Route::post('proses', 'prosesLogin');
    Route::get('register', 'register');
    Route::post('daftar', 'daftar');
    Route::get('logout', 'logout');
});


Route::middleware('auth')->group(function () {
    //agen
    Route::prefix('agen')->group(function () {
        Route::controller(dashboardController::class)->group(function () {
            Route::get('/', 'index');
        });
        Route::get('user', [userController::class, 'index']);
        Route::get('user/hapus/{id}', [userController::class, 'hapus']);
        Route::get('user/view/{id}', [userController::class, 'hapus']);
        Route::post('user/add', [userController::class, 'create']);
        Route::post('user/edit/{id}', [userController::class, 'edit']);

        Route::get('pangkalan', [pangkalanController::class, 'index']);
        Route::get('pangkalan/hapus/{id}', [pangkalanController::class, 'delete']);
        Route::post('pangkalan/add', [pangkalanController::class, 'create']);
        Route::post('pangkalan/edit/{id}',[pangkalanController::class, 'edit']);
        Route::post('pangkalan/laporan/{id}',[pangkalanController::class, 'laporan']);
    });

    //pangkalan
    //halaman depan
    Route::controller(cekNikController::class)->group(function () {
        Route::get('/', 'index');
        Route::get('cek_nik', 'cek_nik');
        Route::post('cek_nik_lanjutan', 'cek_nik_lanjutan');
        Route::post('proses_tansaksi', 'proses_tansaksi');
        Route::get('struk','struk');
        Route::post('input_pelanggan', 'input_pelanggan');
        Route::get('registration', 'register');
        Route::post('cek_register', 'cek_register');
    });
    Route::controller(laporanController::class)->group(function(){
        Route::get('laporan','index');
        Route::post('laporan/cek','cari');
    });
    Route::controller(produkController::class)->group(function(){
        Route::get('atur_produk','index');
        Route::post('atur_produk/update/{id_pangkalan}','update');
        // Route::post('laporan/cek','cari');
    });
    Route::controller(mainController::class)->group(function(){
        Route::get('profile','index');
       
        // Route::post('laporan/cek','cari');
    });
});
