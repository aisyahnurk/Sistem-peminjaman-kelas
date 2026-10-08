<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeminjamanController;

// Jalur 1: Saat user ngetik di browser "localhost/pinjam" (Metode GET)
// Resepsionis akan memanggil Controller bagian 'create' untuk menampilkan form HTML
Route::get('/pinjam', [PeminjamanController::class, 'create']);

// Jalur 2: Saat user klik tombol "Ajukan Pinjaman" di form (Metode POST)
// Resepsionis akan membawa data isian form ke Controller bagian 'store' untuk diproses & disimpan
Route::post('/pinjam', [PeminjamanController::class, 'store']);
