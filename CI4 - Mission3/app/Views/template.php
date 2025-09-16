<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title><?= esc($title ?? 'Sistem Akademik') ?> | Website Akademik</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Optional custom style -->
    <style>
        body {
            background-color: #f8f9fa;
        }

        .navbar-brand {
            font-weight: bold;
        }

        .footer {
            background-color: #343a40;
            color: #fff;
            padding: 15px;
            margin-top: 30px;
            text-align: center;
        }
    </style>
</head>

<body>

    <!-- Header / Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('/') ?>">Sistem Akademik</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('home') ?>">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('mahasiswa') ?>">Daftar Mahasiswa</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <main class="container mt-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <?= $content ?>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <div class="footer">
        <p>&copy; <?= date('Y') ?> by: Hisyam Khaeru Umam</p>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>