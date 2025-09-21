<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="container mt-4">
    <h2>Daftar Courses</h2>

    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
    <?php elseif (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
    <?php endif; ?>

    <h4 class="mt-4">Courses yang tersedia</h4>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($allCourses as $course): ?>
                <tr>
                    <td><?= $course['title'] ?></td>
                    <td><?= $course['description'] ?></td>
                    <td>
                        <a href="/student/enroll/<?= $course['id'] ?>" class="btn btn-sm btn-primary">Enroll</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <h4 class="mt-5">Courses yang sudah diambil</h4>
    <ul class="list-group">
        <?php foreach ($takenCourses as $tc): ?>
            <li class="list-group-item">
                <?= $tc['title'] ?> - <?= $tc['description'] ?>
            </li>
        <?php endforeach; ?>
    </ul>
</div>

<?= $this->endSection() ?>