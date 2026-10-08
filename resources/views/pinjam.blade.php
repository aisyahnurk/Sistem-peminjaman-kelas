<!DOCTYPE html>
<html>
<head>
    <title>Form Pinjam Ruang</title>
</head>
<body>
    <h2>Form Pengajuan Pinjam Ruang</h2>

    <!-- Bagian ini untuk menampilkan pesan sukses kalau data berhasil disimpan -->
    @if(session('success'))
        <div style="color: green; margin-bottom: 15px;">
            {{ session('success') }}
        </div>
    @endif

    <!-- Bagian ini nyambung sama obrolan Validasi kita. Kalau error, muncul di sini -->
    @if($errors->any())
        <div style="color: red; margin-bottom: 15px;">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Form tempat user mengisi data -->
    <form action="/pinjam" method="POST">
        <!-- @csrf ini SANGAT PENTING. Ibarat stempel resmi dari Laravel 
             agar form ini tidak bisa dibajak oleh hacker -->
        @csrf 

        <label>Nama Peminjam:</label><br>
        <input type="text" name="nama_peminjam"><br><br>

        <label>Pilih Ruangan:</label><br>
        <select name="ruangan">
            <option value="Ruang Rapat 1">Ruang Rapat 1</option>
            <option value="Laboratorium Komputer">Laboratorium Komputer</option>
            <option value="Aula Utama">Aula Utama</option>
        </select><br><br>

        <label>Tanggal Pinjam:</label><br>
        <input type="date" name="tanggal_pinjam"><br><br>

        <button type="submit">Ajukan Pinjaman</button>
    </form>

</body>
</html>