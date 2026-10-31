<?php
declare(strict_types=1);
function e(string $string): string
{
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

function formatRupiah(int $angka): string
{
    return 'Rp ' . number_format($angka, 0, ',', '.');
}

function getStatusBadge(int $stok): array
{
    return match (true) {
        $stok === 0 => ['label' => 'Habis', 'class' => 'badge-danger'],
        $stok < 5 => ['label' => "Sisa $stok porsi", 'class' => 'badge-warning'],
        default => ['label' => 'Tersedia', 'class' => 'badge-success'],
    };
}

function hitungRingkasan(array $data): array
{
    $totalMenu = count($data);
    $semuaHarga = array_column($data, 'harga');
    $totalNilai = array_sum($semuaHarga);
    
    $rataRata = $totalMenu > 0 ? (int) round($totalNilai / $totalMenu) : 0;
    $hargaTermurah = !empty($semuaHarga) ? min($semuaHarga) : 0;

    return [
        'total' => $totalMenu,
        'rata_rata' => $rataRata,
        'termurah' => $hargaTermurah,
    ];
}

