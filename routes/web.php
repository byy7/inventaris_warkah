<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\App;

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
});

Auth::routes();

Route::middleware(['auth'])->group(function(){
    Route::get('/home',[\App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::middleware(['admin'])->group(function(){
        Route::get('admin', [AdminController::class, 'admin']);
        Route::get('admin/data', [AdminController::class, 'data']);
        Route::get('admin/input', [AdminController::class, 'input']);
        Route::post('admin/simpan', [AdminController::class, 'simpan']);
        Route::get('admin/edit/{id}',[AdminController::class,'edit']);
        Route::post('admin/update',[AdminController::class,'update']);
        Route::get('admin/hapus/{id}',[AdminController::class,'hapus']);
        Route::get('admin/cari',[AdminController::class,'cari']);
        Route::get('admin/laporan',[AdminController::class,'laporan']);
        Route::get('admin/datapeminjaman',[AdminController::class,'datapinjam']);
        Route::get('admin/pengembalian/{id}',[AdminController::class,'pengembalian']);
        Route::get('admin/caridata',[AdminController::class,'caridata']);
        Route::get('admin/datauser',[AdminController::class,'datauser']);
        Route::get('admin/caridatauser',[AdminController::class,'caridatauser']);
        Route::get('/getdesa',[AdminController::class,'getDesa']);
        Route::get('admin/datapengajuan',[AdminController::class,'datapengajuan']);
        Route::get('admin/caridatapengajuan',[AdminController::class,'caridatapengajuan']);
        Route::get('admin/datapengajuan/{id}',[AdminController::class,'status']);

    });
  
    Route::middleware(['user'])->group(function(){
        Route::get('user', [UserController::class, 'index']);
        Route::get('user', [UserController::class, 'data']);
        Route::get('user/riwayatpengajuan', [UserController::class, 'riwayatpinjaman']);
        Route::get('user/cari',[UserController::class,'cari']);
        Route::get('user/peminjamanwarkah/{id}',[UserController::class,'pinjam']);
        Route::get('user/caririwayat',[UserController::class,'caririwayat']);
        Route::post('user/simpanpinjaman',[UserController::class,'simpanpinjaman']);
    });
    
    Route::get('/logout',function(){
        Auth::logout();
        redirect('/');
    });
});