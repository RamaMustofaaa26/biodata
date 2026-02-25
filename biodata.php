<?php

$nama = "Ramz";
$umur = 17;
$alamat = "Jakarta";
$hobi = ["Membaca", "Ngoding", "Gaming"];

if ($umur >= 18) {
    $kategori = "Dewasa";
} else {
    $kategori = "Remaja";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Biodata Saya</title>
</head>
<body>
    <h2>Biodata Diri</h2>
    <p><strong>Nama:</strong> <?= $nama ?></p>
    <p><strong>Umur:</strong> <?= $umur ?> tahun</p>
    <p><strong>Kategori:</strong> <?= $kategori ?></p>
    <p><strong>Alamatiw:</strong> <?= $alamat ?></p>
    p><strong>BUKU:</strong> <?= $buku ?></p>
    
    <p><strong>Hobi:</strong></p>
    <ul>
        <?php foreach ($hobi as $h): ?>
            <li><?= $h ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
