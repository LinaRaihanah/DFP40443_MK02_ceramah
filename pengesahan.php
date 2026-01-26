<?php
$nama     = $_POST['nama'];
$email    = $_POST['email'];
$telefon  = $_POST['telefon'];
$kategori = $_POST['kategori'];
$slot     = $_POST['slot'];

$harga = 35; 
$jumlah = $harga * $slot;
?>
<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <title>Pengesahan Pendaftaran</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="box">
    <h2>Pengesahan Pendaftaran</h2>

    <div class="info-box">
        <h3>Maklumat Ceramah</h3>
        <p><strong>Tajuk:</strong> Ceramah Kejayaan Digital</p>
        <p><strong>Penceramah:</strong> Puan Hawariyah</p>
        <p><strong>Tarikh:</strong> 15 Mei 2026</p>
        <p><strong>Masa:</strong> 9.00 pagi – 4.00 petang</p>
        <p><strong>Lokasi:</strong> Dewan Kuliah Utama</p>
    </div>

    <div class="info-box">
        <h3>Maklumat Peserta</h3>
        <p><strong>Nama:</strong> <?php echo $nama; ?></p>
        <p><strong>E-mel:</strong> <?php echo $email; ?></p>
        <p><strong>Telefon:</strong> <?php echo $telefon; ?></p>
        <p><strong>Kategori:</strong> <?php echo $kategori; ?></p>
        <p><strong>Bilangan Slot:</strong> <?php echo $slot; ?></p>
    </div>

    <div class="info-box">
        <h3>Bayaran</h3>
        <p>Harga Seunit: RM <?php echo number_format($harga,2); ?></p>
        <p class="total">
            Jumlah Bayaran: RM <?php echo number_format($jumlah,2); ?>
        </p>
    </div>
</div>

</body>
</html>