<h2>Daftar Mahasiswa</h2>
<a href="/admin/students/create">Tambah Mahasiswa</a>
<table border="1" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Umur</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($students as $s): ?>
        <tr>
            <td><?= $s['id'] ?></td>
            <td><?= $s['NIM'] ?></td>
            <td><?= $s['nama'] ?></td>
            <td><?= $s['umur'] ?></td>
            <td>
                <a href="/admin/students/edit/<?= $s['id'] ?>">Edit</a> |
                <a href="/admin/students/delete/<?= $s['id'] ?>" onclick="return confirm('Yakin?')">Delete</a>
                <a href="/admin/students/detail/<?= $s['id'] ?>">View Detail</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>