<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LembagaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route::resource('admin', DashboardController::class);

    // CRUD Route
    Route::resource('lembaga', LembagaController::class);
    Route::resource('siswa', SiswaController::class);
    Route::resource('useradm', UserController::class);

    // Search
    Route::get('/lembagas/search', [LembagaController::class, 'search'])->name('lembagas.search');
    Route::get('/siswas/search', [SiswaController::class, 'search'])->name('siswas.search');
    Route::get('/useradm/search', [UserController::class, 'search'])->name('useradm.search');

    // Export Excel
    Route::get('exportExcelSiswa', [SiswaController::class, 'exportExcelSiswa'])->name('exportExcelSiswa');
    Route::get('exportExcelLembaga', [LembagaController::class, 'exportExcelLembaga'])->name('exportExcelLembaga');
    Route::get('myprofile', [DashboardController::class, 'myprofile'])->name('myprofile');
});


require __DIR__ . '/auth.php';
