<?php
// Terima data dari borang
$nama     = $_POST['nama'] ?? '';
$email    = $_POST['email'] ?? '';
$telefon  = $_POST['telefon'] ?? '';
$kategori = $_POST['kategori'] ?? '';
$slot     = $_POST['slot'] ?? 0;

$harga  = 35;
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

    <!-- Maklumat Ceramah -->
    <h3>Maklumat Ceramah</h3>
    <table class="table">
        <tr>
            <td><strong>Tajuk: </strong></td>
            <td>Ceramah Kejayaan Digital</td>
        </tr>
        <tr>
            <td><strong>Penceramah: </strong></td>
            <td>Puan Hawariyah</td>
        </tr>
        <tr>
            <td><strong>Tarikh: </strong></td>
            <td>15 Mei 2026</td>
        </tr>
        <tr>
            <td><strong>Masa: </strong></td>
            <td>9.00 pagi – 4.00 petang</td>
        </tr>
        <tr>
            <td><strong>Lokasi: </strong></td>
            <td>Dewan Kuliah Utama</td>
        </tr>
    </table>

    <hr class="separator">

    <!-- Maklumat Peserta -->
    <h3>Maklumat Peserta</h3>
    <table class="table">
        <tr>
            <td><strong>Nama: </strong></td>
            <td><?php echo htmlspecialchars($nama); ?></td>
        </tr>
        <tr>
            <td><strong>Email: </strong></td>
            <td><?php echo htmlspecialchars($email); ?></td>
        </tr>
        <tr>
            <td><strong>No Telefon: </strong></td>
            <td><?php echo htmlspecialchars($telefon); ?></td>
        </tr>
        <tr>
            <td><strong>Kategori: </strong></td>
            <td><?php echo htmlspecialchars($kategori); ?></td>
        </tr>
        <tr>
            <td><strong>Bilangan slot: </strong></td>
            <td><?php echo htmlspecialchars($slot); ?></td>
        </tr>
    </table>

    <hr class="separator">

    <!-- Maklumat Bayaran -->
    <h3>Maklumat Bayaran</h3>
    <table class="table">
        <tr>
            <td><strong>Harga satu slot</strong></td>
            <td>RM <?php echo number_format($harga, 2); ?></td>
        </tr>
        <tr class="total">
            <td>Jumlah Yuran: </td>
            <td>RM <?php echo number_format($jumlah, 2); ?></td>
        </tr>
        <tr class="total">
            <td>Pendaftaran Berjaya! </td>
        </tr>
    </table>
</div>

</body>
</html>
