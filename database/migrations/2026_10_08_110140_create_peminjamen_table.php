<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('peminjamans', function (Blueprint $table) {
        $table->id(); // Membuat kolom ID otomatis (1, 2, 3...)
        
        // --- INI YANG KITA TAMBAHKAN ---
        $table->string('nama_peminjam'); // Kolom teks untuk nama
        $table->string('ruangan');       // Kolom teks untuk nama ruang
        $table->date('tanggal_pinjam');  // Kolom khusus tanggal
        // -------------------------------
        
        $table->timestamps(); // Otomatis mencatat waktu data dibuat (created_at & updated_at)
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjamen');
    }
};
