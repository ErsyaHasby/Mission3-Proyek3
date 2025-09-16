<h2>Daftar Courses</h2>
<a href="/admin/courses/create">Tambah Course</a>
<table border="1" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Deskripsi</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($courses as $c): ?>
        <tr>
            <td><?= $c['id']; ?></td>
            <td><?= $c['title']; ?></td>
            <td><?= $c['description']; ?></td>
            <td>
                <a href="/admin/courses/edit/<?= $c['id']; ?>">Edit</a> |
                <a href="/admin/courses/delete/<?= $c['id']; ?>" onclick="return confirm('Yakin hapus?')">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>