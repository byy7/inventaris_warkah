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
        Route::get('admin/input', [AdminController::class, 'input']);
        Route::post('admin/simpan', [AdminController::class, 'simpan']);
        Route::get('admin/edit/{id}',[AdminController::class,'edit']);
        Route::post('admin/update',[AdminController::class,'update']);
        Route::get('admin/hapus/{id}',[AdminController::class,'hapus']);
        Route::get('admin/cari',[AdminController::class,'cari']);
    });
  
    Route::middleware(['user'])->group(function(){
        Route::get('user', [UserController::class, 'index']);
        Route::get('user', [UserController::class, 'data']);
        Route::get('user/cari',[UserController::class,'cari']);
    });
    
    Route::get('/logout',function(){
        Auth::logout();
        redirect('/');
    });
});