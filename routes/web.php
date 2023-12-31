<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
// ...
Route::get('/', function () {
    return view('welcome');
});

// web.php or routes/web.php
Route::get('/dashboard', [PegawaiController::class, 'dashboard'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    // Rute untuk Pegawai
    Route::resource('pegawai', PegawaiController::class);

    // Rute untuk Jabatan
    Route::resource('jabatan', JabatanController::class);

    // Rute untuk Absensi
    Route::resource('absensi', AbsensiController::class);

    // Rute untuk Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Rute untuk Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// ...

require __DIR__.'/auth.php';
?>