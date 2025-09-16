<h2>Edit Mahasiswa</h2>
<form method="post" action="/admin/students/update/<?= $student['id'] ?>">
    <label>NIM</label><br>
    <input type="text" name="NIM" value="<?= $student['NIM'] ?>"><br>
    <label>Nama</label><br>
    <input type="text" name="nama" value="<?= $student['nama'] ?>"><br>
    <label>Umur</label><br>
    <input type="number" name="umur" value="<?= $student['umur'] ?>"><br>
    <button type="submit">Update</button>
</form>