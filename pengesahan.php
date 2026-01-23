<?php
// Terima data daripada borang
$nama     = $_POST['nama'];
$email    = $_POST['email'];
$telefon  = $_POST['telefon'];
$kategori = $_POST['kategori'];
$slot     = $_POST['slot'];

// Tetapan harga
$harga_unit = 30;
$jumlah_yuran = $harga_unit * $slot;
?>

<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <title>Pengesahan Pendaftaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #fa9cff;
        }
        .box {
            width: 90%;
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
            margin-top: 40px;
            border-radius: 8px;
        }
        h2 {
            color: #b31f9c;
        }
        p {
            margin: 8px 0;
        }
        .total {
            font-size: 18px;
            font-weight: bold;
            color: green;
        }
    </style>
</head>
<body>

<div class="box">
    <h2>Pengesahan Pendaftaran</h2>

    <p><strong>Nama:</strong> <?php echo $nama; ?></p>
    <p><strong>E-mel:</strong> <?php echo $email; ?></p>
    <p><strong>Telefon:</strong> <?php echo $telefon; ?></p>
    <p><strong>Kategori:</strong> <?php echo $kategori; ?></p>
    <p><strong>Bilangan Slot:</strong> <?php echo $slot; ?></p>
    <p><strong>Harga Seunit:</strong> RM <?php echo number_format($harga_unit, 2); ?></p>

    <p class="total">
        Jumlah Yuran Perlu Dibayar:
        RM <?php echo number_format($jumlah_yuran, 2); ?>
    </p>
</div>

</body>
</html>