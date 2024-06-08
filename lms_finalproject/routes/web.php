<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\guruController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\RaporController;
use App\Http\Controllers\siswaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AccountSettingsController;
use App\Http\Controllers\adminController;

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
Route::get('/admin', [adminController::class, 'index'])->name('admin');
Route::resource('/data-siswa', siswaController::class);
Route::resource('/data-guru', guruController::class);
// Route::get('/admin', function () {
//     $user = Auth::user()->id;
//     return view('admin.pages.dashboard', ['user' => $user]);
// });




// Authentication Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::get('/guru', [guruController::class, 'showRegistrationForm'])->name('register_guru');
Route::post('/register', [RegisterController::class, 'register'])->name('done_regis');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Mapel Routes
Route::get('/mapel', [MapelController::class, 'index'])->name('mapel.index');

Route::get('/account-settings', [AccountSettingsController::class, 'index'])->name('account.settings');

Route::get('/rapor', [RaporController::class, 'index'])->name('rapor.index');
