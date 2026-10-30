<?php
declare(strict_types=1);
require_once __DIR__ . '/functions.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=10">

    <title>Warkop STK - Profil & Tempat Nongkrong</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="container nav-container">
            <div class="brand">
                <img src="assets/logo.png" alt="Logo warkop STK" class="logo-img">
                <h1>Warkop STK ( Sedulur Tunggal Kopi )</h1>
            </div>
            <nav>
                <a href="index.php" class="active">Profil</a>
                <a href="#katalog.php">Daftar Menu</a>
            </nav>
        </div>
    </header>

    <main class="container">
        <section>
            <h1>Selamat Datang di Warkop STK</h1>
            <p>
                Warkop STK adalag ruang santai favorit mahasiswa dan warga sekitar yang menyediakan aneka kopo,
                olahan mie khas warkop, serta cemilan ringan dengan harga yang terjangkau. tempat yang pas untuk berdiskusi,
                nongkrong santai, maupun menyelesaikan tugas kuliah bersama.
            </p>
        </section>
        
        <section>
            <h2>Fasilitas Warkop STK</h2>
            <div class="fasilitas-grid">
                <div class="fasilitas-card">Wifi Kencang 24 Jam</div>
                <div class="fasilitas-card">Banyak Colokan Listrik</div>
                <div class="fasilitas-card">Area Nobar Sepak Bola</div>
                <div class="fasilitas-card">Parkir Motor Luas $ Aman</div>
            </div>
        </section>

        <section>
            <h2>Lokasi & Jam OperasionalWarkop STK</h2>
            <p><strong>Alamat:</strong>Jl. Kenjeran No.329, Gading, Kecamatan Tambaksari Surabaya, Jawa Timur</p>
            <p><strong>Jam Operasional:</strong> Buka Setiap Hari ( 24 Jam Nonstop )</p>
        </section>
    </main>

    <footer>
        <p>&copy; 2026 Warkop STK. Dibuat untuk UTS Pemrograman Web.</p>
    </footer>
</body>
</html>