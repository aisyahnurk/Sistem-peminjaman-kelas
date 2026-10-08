<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman; // Wajib ditulis agar Controller bisa menyuruh Model

class PeminjamanController extends Controller
{
    // Fungsi ini dipanggil oleh Route::get
    // Tugasnya cuma satu: Menampilkan file HTML (View) ke layar
    public function create()
    {
        return view('pinjam');
    }

    // Fungsi ini dipanggil oleh Route::post saat tombol submit diklik
    // Tugasnya: Validasi -> Simpan ke Database -> Kembalikan pesan sukses
    public function store(Request $request)
    {
        // 1. VALIDASI (Proses pengecekan "Satpam")
        // Mengecek apakah form sudah diisi dengan benar sesuai aturan
        $data_valid = $request->validate([
            'nama_peminjam'  => 'required', // required = wajib diisi, tidak boleh kosong
            'ruangan'        => 'required',
            'tanggal_pinjam' => 'required|date' // wajib diisi DAN formatnya harus tanggal
        ]);

        // Catatan: Jika validasi GAGAL, sistem otomatis berhenti di baris ini.
        // Laravel akan melempar user kembali ke halaman form beserta pesan error.

        // 2. MODEL -> DATABASE (Proses "Asisten Penyimpan")
        // Jika validasi LULUS, kode ini akan dieksekusi.
        // Kita suruh Model 'Peminjaman' untuk membuat data baru di database
        Peminjaman::create($data_valid);

        // 3. KEMBALI KE VIEW 
        // Arahkan user kembali ke form sambil membawa pesan sukses
        return redirect('/pinjam')->with('success', 'Mantap! Pengajuan pinjam ruang berhasil disimpan.');
    }
}