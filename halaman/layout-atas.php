<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($judul) ?></title>
    <style>
        body { font-family: system-ui, sans-serif; max-width: 720px; margin: 2rem auto; padding: 0 1rem; line-height: 1.6; }
        nav a { margin-right: 1rem; }
        code { background: #eee; padding: 2px 6px; border-radius: 4px; }
        table { border-collapse: collapse; }
        td, th { border: 1px solid #ccc; padding: 4px 10px; }
    </style>
</head>
<body>
<nav>
    <a href="<?= $base ?>/">Beranda</a>
    <a href="<?= $base ?>/profil">Profil</a>
    <a href="<?= $base ?>/mahasiswa">Mahasiswa</a>
    <a href="<?= $base ?>/mahasiswa?prodi=ti">Mahasiswa (prodi=ti)</a>
    <a href="<?= $base ?>/halaman-tidak-ada">Tes 404</a>
</nav>
<hr>
