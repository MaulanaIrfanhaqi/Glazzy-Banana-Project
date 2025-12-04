<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| PUBLIC ROUTES - Website Pengunjung
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/katalog', [HomeController::class, 'katalog'])->name('katalog');
Route::get('/produk/{produk}', [HomeController::class, 'show'])->name('produk.show');
Route::get('/about', function () {
    return view('about');
})->name('about');

/*
|--------------------------------------------------------------------------
| ADMIN ROUTES - Admin Panel
|--------------------------------------------------------------------------
| Semua route admin berada di /panel-admin
| Akses: http://localhost:8000/panel-admin/login
*/

Route::prefix('panel-admin')->name('admin.')->group(function () {
    
    // Route Authentication dari Laravel Breeze
    // Login: /panel-admin/login
    // Register: /panel-admin/register (opsional, bisa dihapus)
    require __DIR__.'/auth.php';
    
    // ✅ ROUTE ADMIN (HANYA PERLU AUTH, TIDAK PERLU VERIFIED)
    Route::middleware('auth')->group(function () {
        
        // Dashboard Admin
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
        
        // CRUD Kategori
        Route::resource('kategori', KategoriController::class);
        
        // CRUD Produk
        Route::resource('produk', ProdukController::class);
    });
});
