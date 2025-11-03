<?php

// 3. Fungsi Anonim (Anonymous Function / Closure)
// Ini adalah fungsi yang tidak memiliki nama.
// Biasanya disimpan di dalam sebuah variabel.

// Menyimpan fungsi anonim ke dalam variabel $sapa
$sapa = function($nama) {
    return "Halo, " . $nama . ". Ini dari fungsi anonim.";
};

// Memanggilnya seperti memanggil variabel biasa, dengan menambahkan ()
echo $sapa("bilkis");

echo "<hr>";

// Fungsi anonim sering digunakan sebagai argumen untuk fungsi lain (callback).
$angka = [1, 2, 3, 4, 5];

// array_map() adalah fungsi bawaan PHP untuk memproses setiap elemen array
// dengan sebuah fungsi callback.
$angka_kuadrat = array_map(function($n) {
    return $n * $n;
}, $angka);

// Menampilkan hasilnya
echo "Array awal: " . implode(", ", $angka) . "<br>";
echo "Array setelah di-kuadratkan: " . implode(", ", $angka_kuadrat) . "<br>";

?>
