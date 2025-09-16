<h2>Selamat datang di Dashboard Admin</h2>
<p>Halo, <?= session()->get('username'); ?> (<?= session()->get('role'); ?>)</p>
<a href="/admin/courses">Kelola Courses</a> |
<a href="/admin/students">Kelola Mahasiswa</a> |
<a href="/logout">Logout</a>