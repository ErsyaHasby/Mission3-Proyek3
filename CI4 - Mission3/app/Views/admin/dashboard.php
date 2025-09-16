<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<h3 class="mb-4">Dashboard Admin</h3>

<div class="row">
    <div class="col-md-4">
        <div class="card shadow-sm mb-3">
            <div class="card-body text-center">
                <h5 class="card-title">Kelola Mahasiswa</h5>
                <p class="card-text">Tambah, ubah, dan hapus data mahasiswa.</p>
                <a href="#" class="btn btn-outline-primary btn-sm">Kelola</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow-sm mb-3">
            <div class="card-body text-center">
                <h5 class="card-title">Kelola Dosen</h5>
                <p class="card-text">Atur data dosen dan mata kuliah.</p>
                <a href="#" class="btn btn-outline-success btn-sm">Kelola</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow-sm mb-3">
            <div class="card-body text-center">
                <h5 class="card-title">Laporan</h5>
                <p class="card-text">Lihat laporan akademik dan statistik.</p>
                <a href="#" class="btn btn-outline-warning btn-sm">Lihat</a>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>