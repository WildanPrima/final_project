<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\AccountSettingsController;
use App\Http\Controllers\guruController;
use App\Http\Controllers\RaporController;
use App\Http\Controllers\siswaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and assigned to the "web" middleware group.
| Make something great!
|
*/

// Landing Page
Route::view('/', 'landingpage');


// admin
Route::get('/admin', function () {
    return view('admin.pages.dashboard');
});
Route::resource('/data-siswa', siswaController::class);




// Authentication Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::get('/guru', [guruController::class, 'showRegistrationForm'])->name('register_guru');
Route::post('/register', [RegisterController::class, 'register'])->name('done_regis');

// Mapel Routes
Route::get('/mapel', [MapelController::class, 'index'])->name('mapel.index');

Route::get('/account-settings', [AccountSettingsController::class, 'index'])->name('account.settings');

Route::get('/rapor', [RaporController::class, 'index'])->name('rapor.index');
