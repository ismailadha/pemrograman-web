<?php
// Query string: /mahasiswa?prodi=ti
$prodi = $_GET['prodi'] ?? 'semua';

$data = [
    ['nim' => 101, 'nama' => 'Cut Nyak',  'prodi' => 'ti'],
    ['nim' => 102, 'nama' => 'Teuku Budi', 'prodi' => 'si'],
    ['nim' => 103, 'nama' => 'Siti Aminah', 'prodi' => 'ti'],
];

if ($prodi !== 'semua') {
    $data = array_filter($data, fn($m) => $m['prodi'] === $prodi);
}
?>
<h1>Daftar Mahasiswa</h1>
<p>Filter prodi: <strong><?= htmlspecialchars($prodi) ?></strong>
   (ubah di URL: <code>?prodi=ti</code> atau <code>?prodi=si</code>)</p>

<table>
    <tr><th>NIM</th><th>Nama</th><th>Prodi</th></tr>
    <?php foreach ($data as $m): ?>
    <tr>
        <td><a href="<?= $base ?>/mahasiswa/<?= $m['nim'] ?>"><?= $m['nim'] ?></a></td>
        <td><?= htmlspecialchars($m['nama']) ?></td>
        <td><?= htmlspecialchars($m['prodi']) ?></td>
    </tr>
    <?php endforeach; ?>
</table>
