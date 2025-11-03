<?php

// 4. Fungsi Panah (Arrow Function)
// Diperkenalkan di PHP 7.4. Ini adalah sintaks yang lebih ringkas
// untuk menulis fungsi anonim yang hanya memiliki satu baris ekspresi.

// -- Fungsi anonim biasa --
$angka = [1, 2, 3, 4, 5];
$angka_kali_dua_biasa = array_map(function($n) {
    return $n * 2;
}, $angka);

echo "Hasil dengan fungsi anonim biasa: " . implode(", ", $angka_kali_dua_biasa) . "<br>";


// -- Dengan Arrow Function --
// Kata kunci `function` dan `return` dihilangkan.
// Arrow function secara otomatis bisa mengakses variabel dari lingkup induknya (parent scope).
$pengali = 3;
$angka_kali_tiga_arrow = array_map(fn($n) => $n * $pengali, $angka);

echo "Hasil dengan arrow function: " . implode(", ", $angka_kali_tiga_arrow) . "<br>";

?>
