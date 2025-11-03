<?php

// Statement adalah satu baris perintah lengkap dalam PHP.
// Setiap statement harus diakhiri dengan titik koma (;).

// Contoh Statement 1: Memberi nilai ke variabel
$nama = "bilkis";

// Contoh Statement 2: Menampilkan output
echo "Halo, nama saya {$nama}";
echo "<br>";

// Ekspresi adalah bagian dari kode yang menghasilkan sebuah nilai.

// 5 adalah ekspresi yang nilainya 5.
// 10 + 5 adalah ekspresi yang nilainya 15.

$angka1 = 10; // 10 adalah ekspresi
$angka2 = 5;  // 5 adalah ekspresi

// $angka1 + $angka2 adalah ekspresi, hasilnya diberikan ke variabel $hasil
$hasil = $angka1 + $angka2;

// Statement yang berisi ekspresi
echo "Hasil dari {$angka1} + {$angka2} adalah {$hasil}"; // {$hasil} adalah ekspresi

?>
