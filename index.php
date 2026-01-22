<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <title>Ceramah Berbayar</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #fa9cff;
        }

        .container {
            width: 90%;
            max-width: 800px;
            margin: 30px auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
        }

        h1, h2, h3 {
            color: #b31f9c;
        }

        .iklan {
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 2px solid #eee;
        }

        label {
            font-weight: bold;
            margin-top: 10px;
            display: block;
        }

        input:not([type="checkbox"]),
        select,
        button {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            box-sizing: border-box;
        }

        .checkbox-label {
            display: flex;
            align-items: center;
            margin-top: 15px;
            font-weight: normal;
        }

        .checkbox-label input {
            width: auto;
            margin-right: 8px;
        }

        button {
            background: #ff1fff;
            color: white;
            border: none;
            margin-top: 20px;
            cursor: pointer;
            border-radius: 4px;
        }

        button:hover {
            background: #820050;
        }

       .info-stack {
            margin-top: 20px;
        }

        .info-box {
            background: #fff0fa;
            padding: 15px;
            border-radius: 8px;
            border-left: 5px solid #ff1fff;
            margin-bottom: 15px;
        }

        .info-box h3 {
            margin-top: 0;
            color: #820050;
        }
    </style>
</head>

<body>

<div class="container">

<div class="iklan">
    <h1>Ceramah Berbayar: Kejayaan Digital</h1>

    <div class="info-stack">

        <div class="info-box">
            <h3>Penceramah</h3>
            <p><strong>Nama:</strong> Dr. Ahmad Zaki</p>
            <p><strong>Gelaran:</strong> Pensyarah Kanan</p>
            <p><strong>Kepakaran:</strong> Teknologi Maklumat & Motivasi</p>
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
            <p><strong>Tarikh:</strong> 15 Mei 2026</p>
            <p><strong>Masa:</strong> 9.00 pagi – 4.00 petang</p>
            <p><strong>Lokasi:</strong> Dewan Seminar Utama</p>
        </div>

        <div class="info-box">
            <h3>Yuran</h3>
            <p><strong>RM 2,500.00</strong> / slot</p>
        </div>

        <div class="info-box">
            <h3>Maklumat Hubungan</h3>
            <p>E-mel: info@ceramahdigital.my</p>
            <p>Telefon: 012-3456789</p>
        </div>

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

        <label class="checkbox-label">
            <input type="checkbox" required>
            Saya bersetuju dengan Terma & Syarat
        </label>

        <button type="submit">Hantar</button>
    </form>
  </div>
</div>

</body>
</html>