<?php
// Maklumat ceramah
$tajuk = "Ceramah Berbayar: Kejayaan Digital";
$penceramah = "Puan Hawariyah";
$jawatan = "Ketua Jabatan Teknologi Maklumat & Komunikasi";
$tarikh = "15 Mei 2026";
$masa = "9.00 pagi – 4.00 petang";
$lokasi = "Dewan Seminar Utama";
$harga = 2500;
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

    <div class="iklan">
        <h1><?php echo $tajuk; ?></h1>

        <div class="info-box">
            <h3>Penceramah</h3>
            <img src="penceramah.jpg" class="penceramah-img">
            <p><strong>Nama:</strong> <?php echo $penceramah; ?></p>
            <p><strong>Jawatan:</strong> <?php echo $jawatan; ?></p>
        </div>

        <div class="info-box">
            <h3>Sinopsis</h3>
            <p>
                Ceramah ini memberi pendedahan tentang kemahiran digital,
                pengurusan kerjaya dan strategi kejayaan dalam era teknologi.
            </p>
        </div>

        <div class="info-box">
            <h3>Logistik</h3>
            <p><strong>Tarikh:</strong> <?php echo $tarikh; ?></p>
            <p><strong>Masa:</strong> <?php echo $masa; ?></p>
            <p><strong>Lokasi:</strong> <?php echo $lokasi; ?></p>
            <p><strong>Yuran:</strong> RM <?php echo number_format($harga,2); ?> / slot</p>
        </div>
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

        <!-- hantar harga ke pengesahan -->
        <input type="hidden" name="harga" value="<?php echo $harga; ?>">

        <label class="checkbox-label">
            <input type="checkbox" required>
            Saya bersetuju dengan Terma & Syarat
        </label>

        <button type="submit">Hantar</button>
    </form>

</div>

</body>
</html>
