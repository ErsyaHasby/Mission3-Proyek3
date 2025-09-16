<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<div class="card shadow">
    <div class="card-header">
        <h4>Dashboard Mahasiswa</h4>
    </div>
    <div class="card-body">
        <p>Selamat datang, <b><?= session()->get('nama') ?? 'Mahasiswa' ?></b>!</p>
        <div class="list-group">
            <a href="/student/courses" class="list-group-item list-group-item-action">Lihat Courses</a>
        </div>
    </div>
</div>

<?= $this->endSection() ?>