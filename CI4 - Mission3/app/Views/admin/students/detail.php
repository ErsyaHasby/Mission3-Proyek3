<h2>Detail Mahasiswa</h2>

<p><strong>NIM:</strong> <?= $student['nim'] ?></p>
<p><strong>Nama:</strong> <?= $student['nama'] ?></p>
<p><strong>Umur:</strong> <?= $student['umur'] ?></p>
<p><strong>Deskripsi:</strong> <?= $student['deskripsi'] ?? '-' ?></p>

<h3>Courses yang diambil:</h3>
<?php if (count($courses) > 0): ?>
    <ul>
        <?php foreach ($courses as $course): ?>
            <li><?= $course->name ?> - <?= $course->description ?></li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>Belum mengambil course.</p>
<?php endif; ?>

<a href="/admin/students">Kembali</a>