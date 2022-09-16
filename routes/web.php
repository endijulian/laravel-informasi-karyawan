<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\Admin\DataPenilaianAdminController;
use App\Http\Controllers\Admin\NilaiPerformaAdminController;
use App\Http\Controllers\Karyawan\DashboardKaryawanController;
use App\Http\Controllers\Karyawan\NilaiPerformaKaryawanController;
use App\Http\Controllers\Karyawan\DataKaryawanKaryawanController;
use App\Http\Controllers\Leader\DashboardLeaderController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function (){
    return view('auth.login');
});


Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('login',[AuthController::class, 'login'])->name('login-post');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('admin.dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

Route::resource('user', UserController::class);
Route::resource('karyawan', KaryawanController::class);

//admin
Route::resource('penilaian-admin', DataPenilaianAdminController::class);
Route::resource('nilai-performa', NilaiPerformaKaryawanController::class);
Route::get('karyawan-terbaik', [NilaiPerformaAdminController::class, 'terbaik'])->name('karyawan.terbaik');
Route::post('karyawan-terbaik-filter', [NilaiPerformaAdminController::class, 'terbaikFilter'])->name('karyawan.terbaik.filter');
Route::get('karyawan-terendah', [NilaiPerformaAdminController::class, 'terendah'])->name('karyawan.terendah');
Route::post('karyawan-terendah-filter', [NilaiPerformaAdminController::class, 'terendahFilter'])->name('karyawan.terendah.filter');
Route::get('nilai-akhir', [NilaiPerformaAdminController::class, 'nilai'])->name('nilai.akhir');
Route::post('nilai-akhir-filter', [NilaiPerformaAdminController::class, 'nilaiFilter'])->name('nilai.akhir.filter');

//karyawan
Route::get('dashboard_karyawan', [DashboardKaryawanController::class, 'index'])->name('dashboard.karyawan');
Route::resource('nilai-performa', NilaiPerformaKaryawanController::class);
Route::resource('data-karyawan', DataKaryawanKaryawanController::class);

//Leader
Route::get('dashboard_leader', [DashboardLeaderController::class, 'index'])->name('dashboard.leader');
Route::resource('nilai-performa', NilaiPerformaKaryawanController::class);
Route::resource('data-karyawan', DataKaryawanKaryawanController::class);
