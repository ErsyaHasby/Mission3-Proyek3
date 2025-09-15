<!DOCTYPE html>
<html lang="id">
<head>
    <title><?= esc($title) ?> | Website Akademik</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f7f6;
            color: #333;
            /* --- PERUBAHAN DIMULAI DI SINI --- */
            display: flex;             /* 1. Jadikan body sebagai container flexbox */
            flex-direction: column;    /* 2. Atur item di dalamnya secara vertikal (atas ke bawah) */
            min-height: 100vh;         /* 3. Atur tinggi minimal body agar setinggi layar penuh */
        }
        .header { background: linear-gradient(90deg, #0052D4, #4364F7, #6FB1FC); color: #fff; padding: 20px; text-align: center; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        .header h2 { margin: 0; font-size: 2em; }
        .menu { background-color: #fff; text-align: center; border-bottom: 1px solid #ddd; }
        .menu a { display: inline-block; padding: 15px 20px; text-decoration: none; color: #0052D4; font-weight: bold; transition: background-color 0.3s, color 0.3s; }
        .menu a:hover, .menu a.active { background-color: #0052D4; color: #fff; }
        .container {
            max-width: 1000px;
            margin: 20px auto;
            padding: 0 20px;
            flex-grow: 1; /* 4. Izinkan area konten ini untuk tumbuh & mendorong footer ke bawah */
        }
        .content { background-color: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); min-height: 300px; }
        .footer {
            background-color: #343a40;
            color: #fff;
            text-align: center;
            padding: 15px;
            margin-top: 30px; /* margin-top bisa tetap ada atau dihapus sesuai selera */
        }
        /* Style khusus untuk tabel mahasiswa */
        .table-mahasiswa { border-collapse: collapse; width: 100%; margin-top: 20px; box-shadow: 0 2px 3px rgba(0,0,0,0.1); }
        .table-mahasiswa th, .table-mahasiswa td { border: 1px solid #ddd; padding: 12px; text-align: left; }
        .table-mahasiswa th { background-color: #4364F7; color: white; text-transform: uppercase; font-size: 0.9em; }
        .table-mahasiswa tr:nth-child(even) { background-color: #f8f9fa; }
        .table-mahasiswa tr:hover { background-color: #e9ecef; }
        /* Style untuk tombol dan halaman detail */
        .btn-detail { display: inline-block; padding: 5px 10px; font-size: 0.8em; color: #fff; background-color: #28a745; border-radius: 4px; text-decoration: none; text-align: center; }
        .btn-detail:hover { background-color: #218838; }
        .btn-kembali { display: inline-block; margin-top: 20px; padding: 10px 15px; color: #fff; background-color: #6c757d; border-radius: 5px; text-decoration: none; }
        .btn-kembali:hover { background-color: #5a6268; }
        .detail-box p { font-size: 1.1em; line-height: 1.6; border-bottom: 1px solid #eee; padding-bottom: 10px; }
        .detail-box p strong { display: inline-block; width: 80px; color: #555; }
    </style>
</head>
<body>

    <div class="header">
        <h2>Sistem Informasi Akademik</h2>
    </div>

    <div class="menu">
        <a href="<?= base_url('home') ?>">Home</a>
        <a href="<?= base_url('mahasiswa') ?>">Daftar Mahasiswa</a> </div>

    <div class="container">
        <div class="content">
            <?= $content ?>
        </div>
    </div>

    <div class="footer">
        <p>&copy; <?= date('Y') ?> by: Hisyam Khaeru Umam</p>
    </div>

</body>
</html>