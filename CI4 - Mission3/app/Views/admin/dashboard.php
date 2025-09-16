<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<div class="p-4 bg-light rounded shadow-sm">
    <h2 class="mb-4">Dashboard Admin</h2>
    <p>Halo, <strong><?= session('username') ?></strong> (Role: <?= session('role') ?>)</p>

    <div class="mt-3">
        <a href="/admin/courses" class="btn btn-primary me-2">Kelola Courses</a>
        <a href="/admin/students" class="btn btn-info me-2">Kelola Students</a>
        <a href="/auth/logout" class="btn btn-outline-danger">Logout</a>
    </div>
</div>

<?= $this->endSection() ?>