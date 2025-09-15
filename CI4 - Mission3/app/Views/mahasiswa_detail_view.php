<h3>Detail Mahasiswa</h3>

<?php if (!empty($mahasiswa)): ?>
    <div class="detail-box">
        <p><strong>NIM:</strong> <?= esc($mahasiswa['NIM']); ?></p>
        <p><strong>Nama:</strong> <?= esc($mahasiswa['nama']); ?></p>
        <p><strong>Umur:</strong> <?= esc($mahasiswa['umur']); ?></p>
    </div>
<?php else: ?>
    <p>Data mahasiswa tidak ditemukan.</p>
<?php endif; ?>

<a href="<?= base_url('mahasiswa'); ?>" class="btn-kembali"> &larr; Kembali ke Daftar</a>