<h2>Detail Mahasiswa</h2>

<?php if (!empty($student)): ?>
    <p><strong>NIM:</strong> <?= esc($student['NIM']) ?></p>
    <p><strong>Nama:</strong> <?= esc($student['nama']) ?></p>
    <p><strong>Umur:</strong> <?= esc($student['umur']) ?></p>

    <h3>Courses yang diambil:</h3>
    <?php if (!empty($courses)): ?>
        <ul>
            <?php foreach ($courses as $course): ?>
                <li><?= esc($course['title']) ?> - <?= esc($course['description']) ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Belum mengambil course.</p>
    <?php endif; ?>
<?php else: ?>
    <p>Data mahasiswa tidak ditemukan.</p>
<?php endif; ?>

<a href="/admin/students">Kembali</a>