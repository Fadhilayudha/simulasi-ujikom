<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ErrorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\SiswaController;
use App\Imports\PaymentMethodImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\SchoolsImport;

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

Route::view('/', 'landingpage');

// Route::middleware('isGuest')->group(function(){
    Route::post('/login/auth', [LoginController::class, 'auth'])->name('login.auth');
    Route::get('/auth/login', [LoginController::class, 'index'])->name('auth.login');
// });

// Route::middleware('isLogin')->group(function(){
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');

    // Route::middleware('CekRole:admin')->group(function(){
        Route::resource('siswa', SiswaController::class);
    // });

// });

Route::resource('error', ErrorController::class);


// Route::post('/login/auth', [LoginController::class, 'auth'])->name('login.auth');
Route::post('/register/store', [RegistrasiController::class, 'store'])->name('registrasi.store');
Route::get('/registrasi', [RegistrasiController::class, 'index'])->name('registrasi');



