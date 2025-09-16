<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SI Akademik</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">SI Akademik</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <?php if (session()->get('role') === 'student'): ?>
                        <li class="nav-item"><a class="nav-link" href="<?= site_url('student/dashboard') ?>">Dashboard</a>
                        </li>
                    <?php elseif (session()->get('role') === 'admin'): ?>
                        <li class="nav-item"><a class="nav-link" href="<?= site_url('admin/dashboard') ?>">Dashboard</a>
                        </li>
                    <?php endif; ?>

                    <?php if (session()->get('isLoggedIn')): ?>
                        <li class="nav-item"><a class="nav-link text-warning" href="<?= site_url('logout') ?>">Logout</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <main class="container mt-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <?= $this->renderSection('content') ?>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white text-center py-3 mt-4 border-top">
        <small>&copy; <?= date('Y') ?> Sistem Informasi Akademik</small>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>