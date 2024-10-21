<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Gurucontroller;
use App\Http\Controllers\siswacontroller;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


});
Route::group(['middleware' => ['auth', 'role:siswa']], function () {
    Route::get('/siswa/index', [siswacontroller::class, 'index'])->name('Siswa.index');
    // Tambahkan route lain khusus siswa di sini
    Route::resource('Siswa', siswacontroller::class);
    // Route::post('/siswa/store', [SiswaController::class, 'store'])->name('Siswa.store');
});


// Route khusus untuk role "guru"
Route::group(['middleware' => ['auth', 'role:guru']], function () {
    // Route::get('/guru/index', [Gurucontroller::class, 'index'])->name('Guru.index');
    
    // Tambahkan route lain khusus guru di sini
    Route::resource('Guru', Gurucontroller::class);
});


// Auth routes
require __DIR__.'/auth.php';





