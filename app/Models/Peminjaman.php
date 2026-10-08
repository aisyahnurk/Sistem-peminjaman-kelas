<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    // INI SOLUSINYA:
    // Memberi tahu Laravel secara spesifik nama tabel yang kita gunakan
    protected $table = 'tb_peminjaman';

    // Variabel fillable (Daftar Tamu VIP)
    protected $fillable = [
        'nama_peminjam',
        'ruangan',
        'tanggal_pinjam'
    ];
}