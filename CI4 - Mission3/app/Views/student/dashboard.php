<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<h3 class="mb-4">Dashboard Mahasiswa</h3>

<div class="row">
    <div class="col-md-4">
        <div class="card shadow-sm mb-3">
            <div class="card-body text-center">
                <h5 class="card-title">Profil</h5>
                <p class="card-text">Lihat dan perbarui data pribadi Anda.</p>
                <a href="#" class="btn btn-outline-primary btn-sm">Lihat Profil</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow-sm mb-3">
            <div class="card-body text-center">
                <h5 class="card-title">KRS</h5>
                <p class="card-text">Kelola mata kuliah yang Anda ambil semester ini.</p>
                <a href="#" class="btn btn-outline-success btn-sm">Kelola KRS</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow-sm mb-3">
            <div class="card-body text-center">
                <h5 class="card-title">Nilai</h5>
                <p class="card-text">Lihat transkrip nilai Anda.</p>
                <a href="#" class="btn btn-outline-warning btn-sm">Lihat Nilai</a>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>