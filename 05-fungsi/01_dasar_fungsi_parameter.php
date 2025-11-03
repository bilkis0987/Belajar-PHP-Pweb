<?php

// 1. Dasar Fungsi, Parameter, dan Return Value

// Mendefinisikan fungsi bernama `sapa`
// `$nama` adalah sebuah parameter (input untuk fungsi)
function sapa($nama) {
    // `return` digunakan untuk mengembalikan sebuah nilai sebagai output dari fungsi
    return "Halo, " . $nama . "! Selamat datang.";
}

// Memanggil fungsi `sapa` dengan argumen "bilkis"
// Nilai yang dikembalikan oleh fungsi disimpan di variabel `$salam`
$salam = sapa("bilkis");
echo $salam;

echo "<hr>";

// --- Parameter dengan Nilai Default ---
// `$tahun_sekarang` adalah parameter dengan nilai default 2025.
// Jika saat dipanggil parameter ini tidak diisi, maka nilai default akan digunakan.
function hitung_umur($tahun_lahir, $tahun_sekarang = 2025) {
    $umur = $tahun_sekarang - $tahun_lahir;
    return $umur;
}

echo "Umur bilkis: " . hitung_umur(2008) . " tahun.<br>"; // Menggunakan nilai default
echo "Umur lenka (di tahun 2030): " . hitung_umur(2008, 2030) . " tahun.<br>"; // Mengisi semua parameter

?>
