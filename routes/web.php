<?php

use App\Http\Controllers\AccountPenghuniController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\KomplainController;
use App\Http\Controllers\PenghuniController;
use App\Http\Controllers\PropertiController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/loginAction', 'HomeController@index')->name('loginAction');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');

Route::get('/about', function () {
    return view('about');
})->name('about');

// Route::get('/', [LandingPageController::class, 'index'])->name('home');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::prefix('properti')->group(function () {
    Route::get('/', [PropertiController::class, 'index'])->name('index_properti');
    Route::get('/create_properti', [PropertiController::class, 'create'])->name('create_properti');
    Route::post('/store_properti', [PropertiController::class, 'store'])->name('store_properti');
    Route::get('/edit_properti/{id}', [PropertiController::class, 'edit'])->name('edit_properti');
    Route::post('/update_properti/{id}', [PropertiController::class, 'update'])->name('update_properti');
    Route::get('/delete_properti/{id}', [PropertiController::class, 'destroy'])->name('delete_properti');
});

Route::prefix('penghuni')->group(function () {
    Route::get('/', [PenghuniController::class, 'index'])->name('index_penghuni');
    Route::get('/create_penghuni', [PenghuniController::class, 'create'])->name('create_penghuni');
    Route::post('/store_penghuni', [PenghuniController::class, 'store'])->name('store_penghuni');
    Route::get('/edit_penghuni/{id}', [PenghuniController::class, 'edit'])->name('edit_penghuni');
    Route::post('/update_penghuni/{id}', [PenghuniController::class, 'update'])->name('update_penghuni');
    Route::get('/delete_penghuni/{id}', [PenghuniController::class, 'destroy'])->name('delete_penghuni');
});

Route::get('/komplain', [KomplainController::class, 'index'])->name('index_komplain');
Route::get('/keuangan', [KeuanganController::class, 'index'])->name('index_laporan');

Route::prefix('account_penyewa')->group(function () {
    Route::get('/', [AccountPenghuniController::class, 'index'])->name('index_account_penyewa');
    Route::get('/create_account_penyewa', [AccountPenghuniController::class, 'create'])->name('create_account_penyewa');
    Route::post('/store_account_penyewa', [AccountPenghuniController::class, 'store'])->name('store_account_penyewa');
    Route::get('/edit_account_penyewa/{id}', [AccountPenghuniController::class, 'edit'])->name('edit_account_penyewa');
    Route::post('/update_account_penyewa/{id}', [AccountPenghuniController::class, 'update'])->name('update_account_penyewa');
    Route::get('/delete_account_penyewa/{id}', [AccountPenghuniController::class, 'destroy'])->name('delete_account_penyewa');
});
