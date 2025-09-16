<h2>Edit Course</h2>
<form method="post" action="/admin/courses/update/<?= $course['id']; ?>">
    <input type="text" name="title" value="<?= $course['title']; ?>"><br>
    <textarea name="description"><?= $course['description']; ?></textarea><br>
    <button type="submit">Update</button>
</form>