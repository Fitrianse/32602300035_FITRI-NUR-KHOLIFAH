<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'CRUD Mahasiswa' ?></title>
    <link rel="stylesheet" href="<?= base_url('assets/css/crud.css') ?>">
</head>
<body>
    <div class="container">
        <?= $this->renderSection('content') ?>
    </div>
</body>
</html>
