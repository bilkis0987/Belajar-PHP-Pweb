<?php

// 3. Fungsi untuk Menambah & Menghapus Elemen Array

$buah = ["Apel", "Jeruk", "Mangga"];
echo "Array awal: <pre>" . print_r($buah, true) . "</pre>";

// `array_push()`: Menambah satu atau lebih elemen di AKHIR array
array_push($buah, "Anggur", "Leci");
echo "Setelah `array_push()`: <pre>" . print_r($buah, true) . "</pre>";

// `array_pop()`: Menghapus elemen TERAKHIR dari array
$buah_dihapus = array_pop($buah);
echo "Buah yang dihapus: " . $buah_dihapus . "<br>";
echo "Setelah `array_pop()`: <pre>" . print_r($buah, true) . "</pre>";

// `array_unshift()`: Menambah satu atau lebih elemen di AWAL array
array_unshift($buah, "Nanas", "Semangka");
echo "Setelah `array_unshift()`: <pre>" . print_r($buah, true) . "</pre>";

// `array_shift()`: Menghapus elemen PERTAMA dari array
$buah_dihapus_awal = array_shift($buah);
echo "Buah yang dihapus di awal: " . $buah_dihapus_awal . "<br>";
echo "Setelah `array_shift()`: <pre>" . print_r($buah, true) . "</pre>";

// `print_r` digunakan untuk menampilkan isi array agar mudah dibaca.

?>
