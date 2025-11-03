<?php

// 4. Fungsi untuk Mengurutkan Array (Sorting)

// -- sort() & rsort() untuk array terindeks --
$angka = [3, 1, 5, 2, 4];
echo "Array angka awal: <pre>" . print_r($angka, true) . "</pre>";

sort($angka); // Mengurutkan dari kecil ke besar (Ascending)
echo "Setelah `sort()`: <pre>" . print_r($angka, true) . "</pre>";

rsort($angka); // Mengurutkan dari besar ke kecil (Descending)
echo "Setelah `rsort()`: <pre>" . print_r($angka, true) . "</pre>";

echo "<hr>";

// -- asort() & ksort() untuk array asosiatif --
$mahasiswa = [
    "Budi" => 85,
    "Siti" => 92,
    "Andi" => 78
];
echo "Array mahasiswa awal: <pre>" . print_r($mahasiswa, true) . "</pre>";

asort($mahasiswa); // Mengurutkan berdasarkan NILAI (value) secara ascending
echo "Setelah `asort()` (urut berdasarkan nilai): <pre>" . print_r($mahasiswa, true) . "</pre>";

ksort($mahasiswa); // Mengurutkan berdasarkan KUNCI (key) secara ascending
echo "Setelah `ksort()` (urut berdasarkan nama/key): <pre>" . print_r($mahasiswa, true) . "</pre>";

?>
