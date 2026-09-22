<?php

function statuskelulusan(float $ipk): string {
    if ($ipk >= 3.50) return 'sangat memuaskan';
    if ($ipk >= 3.00) return 'memuaskan';
    return 'perlu peningkatan'; }

$mahasiswa = [
    'nim' => '2026001',
    'nama' => 'Park Jisung',
    'prodi' => 'Biomedical Engineering',
    'semester' => '7',
    'ipk' => 3.87 ];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Biodata My Mine Guwehj</title>
</head>
<body>
    <h1>Biodata Mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $kunci => $nilai): ?>
            <li><?= ucfirst($kunci) ?>: <?= htmlspecialchars((string)$nilai) ?></li>
        <?php endforeach; ?>
    </ul>
    <p>Predikat: <?= statuskelulusan($mahasiswa['ipk']) ?></p>
</body>
</html>