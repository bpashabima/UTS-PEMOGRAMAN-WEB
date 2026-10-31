<?php
declare(strict_types=1);

require_once __DIR__ . '/data.php';
require_once __DIR__ . '/functions.php';

$ringkasan = hitungRingkasan($daftarMenu);
$kategoriTerpilih = isset($_GET['kategori']) ? strtolower((string) $_GET['kategori']) : 'all';
$menuDitampilkan = $daftarMenu;
if ($kategoriTerpilih !== 'all') {
    $menuDitampilkan = array_filter($daftarMenu, function ($item) use ($kategoriTerpilih) {
        return strtolower($item['kategori']) === $kategoriTerpilih;
    });
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Menu - Warkop STK</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    <div class="container nav-container">
        <div class="brand">
            <img src="assets/logo.png" alt="Logo Warkop STK" class="logo-img">
            <h1>Warkop STK ( Sedulur Tunggal Kopi )</h1>
        </div>
        <nav>
            <a href="index.php">Profil</a>
            <a href="katalog.php" class="active">Daftar Menu</a>
        </nav>
    </div>
    </header>

    <main class="container">
        <section class="stats-grid">
            <div class="stat-card">
                <p>Total Pilihan Menu</p>
                <span><?= e((string) $ringkasan['total']); ?> Varian</span>
            </div>
            <div class="stat-card">
                <p>Rata-Rata Harga</p>
                <span><?= e(formatRupiah($ringkasan['rata_rata'])); ?></span>
            </div>
            <div class="stat-card">
                <p>Menu Termurah</p>
                <span><?= e(formatRupiah($ringkasan['termurah'])); ?></span>
            </div>
        </section>

        <!-- Bagian Grid Katalog Menu -->
        <section>
            <h2>Menu Warkop STK Hari Ini</h2>
            <div class="katalog-header">
                <div class="filter-buttons">
                    <a href="katalog.php?kategori=all"
                        class="btn-filter <?= $kategoriTerpilih === 'all' ? 'active' : ''; ?>">Semua</a>
                    <a href="katalog.php?kategori=makanan" 
                        class="btn-filter <?= $kategoriTerpilih === 'makanan' ? 'active' : ''; ?>">Makanan</a>
                    <a href="katalog.php?kategori=minuman" 
                        class="btn-filter <?= $kategoriTerpilih === 'minuman' ? 'active' : ''; ?>">Minuman</a>
                </div>
            </div>

            <div class="katalog-grid">
                <?php foreach ($menuDitampilkan as $item): ?>
                    <?php $badge = getStatusBadge($item['stok']); ?>
                    <article class="menu-card">
                        <div>
                            <span class="kategori"><?= e($item['kategori']); ?></span>
                            <h3><?= e($item['nama']); ?></h3>
                        </div>
                        <div>
                            <div class="harga"><?= e(formatRupiah($item['harga'])); ?></div>
                            <span class="badge <?= e($badge['class']); ?>">
                                <?= e($badge['label']); ?>
                            </span>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2026 Warkop STK. Dibuat untuk UTS Pemrograman Web.</p>
    </footer>
</body>
</html>