<?php $nim = $params[0]; // dari regex (\d+) ?>
<h1>Detail Mahasiswa</h1>
<p>NIM dari URL: <strong><?= htmlspecialchars($nim) ?></strong></p>
<p><a href="<?= $base ?>/mahasiswa">&larr; Kembali</a></p>
