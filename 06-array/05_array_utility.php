<?php

// 5. Fungsi Utilitas Array Lainnya

// `count()`: Menghitung jumlah elemen dalam array
$buah = ["Apel", "Jeruk", "Mangga"];
echo "Jumlah buah: " . count($buah) . "<br>";

echo "<hr>";

// `array_merge()`: Menggabungkan dua atau lebih array
$sayur = ["Bayam", "Kangkung"];
$makanan = array_merge($buah, $sayur);
echo "Gabungan buah dan sayur: <pre>" . print_r($makanan, true) . "</pre>";

echo "<hr>";

// `in_array()`: Memeriksa apakah sebuah nilai ada di dalam array
$cari_buah = "Jeruk";
if (in_array($cari_buah, $buah)) {
    echo "{$cari_buah} ada di dalam array buah.<br>";
} else {
    echo "{$cari_buah} tidak ada di dalam array buah.<br>";
}

echo "<hr>";

// `array_search()`: Mencari nilai dan mengembalikan kuncinya (key)
$key_mangga = array_search("Mangga", $buah);
echo "Buah Mangga ada di kunci/indeks ke: " . $key_mangga . "<br>";

echo "<hr>";

// `array_key_exists()`: Memeriksa apakah sebuah kunci (key) ada di dalam array
$mahasiswa = ["nama" => "bilkis", "jursusan" => "IT"];
if (array_key_exists("jurusan", $mahasiswa)) {
    echo "Kunci 'jurusan' ada di dalam array mahasiswa.<br>";
} else  {
    echo "Kunci 'jurusan' tidak ada di dalam array mahasiswa.<br>";
}

?>
