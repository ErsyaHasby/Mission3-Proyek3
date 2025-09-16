<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<div class="p-4 bg-light rounded shadow-sm">
    <h2 class="mb-4">Dashboard Mahasiswa</h2>
    <p>Selamat datang, <strong><?= session('username') ?></strong>!</p>

    <div class="mt-3">
        <a href="/student/courses" class="btn btn-success me-2">Lihat Courses</a>
        <a href="/auth/logout" class="btn btn-outline-danger">Logout</a>
    </div>
</div>

<?= $this->endSection() ?>