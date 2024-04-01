<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\UserProfileController;
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
Route::get('/', [LoginController::class, 'index'] )->name('login');
Route::get('/login', [LoginController::class, 'index'] )->name('login');
Route::post('/login-proses', [LoginController::class, 'login_proses'] )->name('login-proses');
Route::get('/logout', [LoginController::class, 'logout'] )->name('logout');
Route::get('/search', [HomeController::class, 'search'])->name('search');

Route::group(['prefix'=> 'admin' ,'middleware'=> ['auth'], 'as' => 'admin.'] ,function() {

Route::get('/dashboard', [HomeController::class, 'dashboard'] )->name('dashboard');
Route::get('/pengajuan', [HomeController::class, 'index'] )->name('index');
Route::get('/tambah-pengajuan', [HomeController::class, 'tambah_pengajuan'] )->name('tambah-pengajuan');
Route::get('/edit-pengajuan/{id}', [HomeController::class, 'edit'] )->name('edit');
Route::get('/pengajuan-detail/{id}',[HomeController::class,'detail'])->name('detail');
Route::post('/simpan', [HomeController::class, 'simpan'] )->name('simpan');
Route::put('/update/{id}',[HomeController::class,'update'])->name('update');
Route::delete('/delete/{id}',[HomeController::class,'delete'])->name('user.delete');
Route::get('/profile', [UserProfileController::class, 'profile'])->name('profile');
Route::put('/profile', [UserProfileController::class, 'update_profile'])->name('user.profile.update');

Route::get('/ubah-password', [PasswordController::class, 'ubahPasswordForm'])->name('password.form');
Route::post('/ubah-password', [PasswordController::class,'ubahPassword'])->name('password.update');

Route::get('/import-excel', [HomeController::class,'import'])->name('import-excel');
Route::post('/import-proses', [HomeController::class,'import_proses'])->name('import-proses');
Route::get('/export-excel/{id}', [HomeController::class,'PengajuanExport'])->name('export-excel');





});








