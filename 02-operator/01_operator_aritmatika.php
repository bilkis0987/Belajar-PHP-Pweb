<?php

// 1. Operator Aritmatika

$angka1 = 10;
$angka2 = 3;

echo "Angka 1: {$angka1} <br>";
echo "Angka 2: {$angka2} <br>";
echo "------------------<br>";

// Penjumlahan
$penjumlahan = $angka1 + $angka2;
echo "Penjumlahan: " . $penjumlahan . "<br>";

// Pengurangan
$pengurangan = $angka1 - $angka2;
echo "Pengurangan: " . $pengurangan . "<br>";

// Perkalian
$perkalian = $angka1 * $angka2;
echo "Perkalian: " . $perkalian . "<br>";

// Pembagian
$pembagian = $angka1 / $angka2;
echo "Pembagian: " . $pembagian . "<br>";

// Modulus (Sisa Bagi)
$modulus = $angka1 % $angka2;
echo "Modulus (Sisa Bagi): " . $modulus . "<br>";

// Eksponensial (Pangkat) - PHP 5.6+
$pangkat = $angka1 ** $angka2;
echo "Pangkat: " . $pangkat . "<br>";

?>
