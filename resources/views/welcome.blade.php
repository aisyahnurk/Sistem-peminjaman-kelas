<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Pinjam Ruang</title>
    <!-- CSS Bootstrap (Pengganti kode panjang tadi) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center vh-100">

    <div class="container bg-white p-4 rounded shadow-sm" style="max-width: 400px;">
        <h4 class="text-center mb-4">Pengajuan Ruang</h4>

        <!-- Pesan Sukses -->
        @if(session('success'))
            <div class="alert alert-success py-2">{{ session('success') }}</div>
        @endif

        <!-- Pesan Error -->
        @if($errors->any())
            <div class="alert alert-danger py-2">
                <ul class="mb-0 ps-3">
                    @foreach($errors->all() as $error) 
                        <li>{{ $error }}</li> 
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Form -->
        <form action="/pinjam" method="POST">
            @csrf 
            <div class="mb-3">
                <label class="form-label fw-bold">Nama Peminjam:</label>
                <input type="text" name="nama_peminjam" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Pilih Ruangan:</label>
                <select name="ruangan" class="form-select">
                    <option value="Ruang Rapat 1">Ruang Rapat 1</option>
                    <option value="Laboratorium Komputer">Laboratorium Komputer</option>
                    <option value="Aula Utama">Aula Utama</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Tanggal Pinjam:</label>
                <input type="date" name="tanggal_pinjam" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary w-100 fw-bold">Ajukan Pinjaman</button>
        </form>
    </div>

</body>
</html>