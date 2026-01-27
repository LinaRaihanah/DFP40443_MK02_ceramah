<?php
// Maklumat ceramah
$tajuk = "Ceramah Berbayar: Kejayaan Digital";
$penceramah = "Puan Hawariyah";
$jawatan = "Ketua Jabatan Teknologi Maklumat & Komunikasi";
$tarikh = "15 Mei 2026";
$masa = "9.00 pagi – 4.00 petang";
$lokasi = "Dewan Kuliah Utama";
$harga = 35; 
?>
<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <title><?php echo $tajuk; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h1><?php echo $tajuk; ?></h1>

    <div class="info-box">
        <!-- Gambar Penceramah -->
        <img src="penceramah.jpg" class="penceramah-img">
        
        <!-- Table Maklumat Ceramah -->
        <table class="info-table">
            <tr>
                <td><strong>Tajuk: </strong></td>
                <td><?php echo $tajuk; ?></td>
            </tr>
            <tr>
                <td><strong>Penceramah: </strong></td>
                <td><?php echo $penceramah; ?></td>
            </tr>
            <tr>
                <td><strong>Jawatan: </strong></td>
                <td><?php echo $jawatan; ?></td>
            </tr>
            <tr>
                <td><strong>Tarikh: </strong></td>
                <td><?php echo $tarikh; ?></td>
            </tr>
            <tr>
                <td><strong>Masa: </strong></td>
                <td><?php echo $masa; ?></td>
            </tr>
            <tr>
                <td><strong>Lokasi: </strong></td>
                <td><?php echo $lokasi; ?></td>
            </tr>
            <tr>
                <td><strong>Yuran: </strong></td>
                <td>RM <?php echo number_format($harga,2); ?> / slot</td>
            </tr>
        </table>
    </div>

    <h2>Borang Tempahan</h2>

    <form action="pengesahan.php" method="POST">
        <label>Nama Penuh</label>
        <input type="text" name="nama" required>

        <label>Alamat E-mel</label>
        <input type="email" name="email" required>

        <label>Nombor Telefon</label>
        <input type="text" name="telefon" required>

        <label>Kategori Peserta</label>
        <select name="kategori" required>
            <option value="">-- Pilih --</option>
            <option>Pelajar</option>
            <option>Pensyarah</option>
            <option>Orang Awam</option>
            <option>Korporat</option>
        </select>

        <label>Bilangan Slot</label>
        <input type="number" name="slot" min="1" required>

        <label class="checkbox-label">
            <input type="checkbox" required>
            Saya bersetuju dengan Terma & Syarat
        </label>

        <button type="submit">Hantar</button>
    </form>

</div>

</body>
</html>
