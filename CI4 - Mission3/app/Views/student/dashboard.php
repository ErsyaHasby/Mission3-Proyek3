<h2>Selamat datang di Dashboard Mahasiswa</h2>
<p>Halo, <?= session()->get('username'); ?> (<?= session()->get('role'); ?>)</p>
<a href="/student/courses">Lihat Courses</a> |
<a href="/logout">Logout</a>