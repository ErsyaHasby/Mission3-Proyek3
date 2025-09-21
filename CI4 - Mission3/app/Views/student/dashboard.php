<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<div class="card shadow">
    <div class="card-header">
        <h4>Dashboard Mahasiswa</h4>
    </div>
    <div class="card-body">
        <p>Selamat datang, <b><?= session()->get('username') ?? 'Mahasiswa' ?></b>!</p>
        <!-- Ubah dari 'nama' ke 'username' karena session pakai 'username' -->
        <div class="list-group">
            <a href="/student/courses" class="list-group-item list-group-item-action">Lihat Courses</a>
            <a href="/student/courses" class="list-group-item list-group-item-action">Enroll Courses Baru</a>
            <!-- Navigasi baru, mengarah ke halaman yang sama -->
        </div>
    </div>
</div>

<?= $this->endSection() ?>