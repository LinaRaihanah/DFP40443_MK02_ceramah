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
            max-width: 700px;
            margin: 30px auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
        }

        h1, h2 {
            color: #b31f9c;
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

        .checkbox-label input[type="checkbox"] {
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
    </style>
</head>

<body>

<div class="container">
    <h1>Ceramah Berbayar: Kejayaan Digital</h1>
    <h2>Borang Tempahan</h2>

    <form action="pengesahan.php" method="POST">

        <label for="nama">Nama Penuh</label>
        <input type="text" id="nama" name="nama" required>

        <label for="email">Alamat E-mel</label>
        <input type="email" id="email" name="email" required>

        <label for="telefon">Nombor Telefon</label>
        <input type="text" id="telefon" name="telefon" required>

        <label for="kategori">Kategori Peserta</label>
        <select id="kategori" name="kategori" required>
            <option value="">-- Pilih --</option>
            <option value="Pelajar">Pelajar</option>
            <option value="Pensyarah">Pensyarah</option>
            <option value="Orang Awam">Orang Awam</option>
            <option value="Korporat">Korporat</option>
        </select>

        <label for="slot">Bilangan Slot</label>
        <input type="number" id="slot" name="slot" min="1" required>

        <label class="checkbox-label">
            <input type="checkbox" required>
            Saya bersetuju dengan Terma & Syarat
        </label>

        <button type="submit">Hantar</button>

    </form>
</div>

</body>
</html>