<?php

// 4. Operator Perbandingan (Comparison)
// Operator ini menghasilkan nilai boolean (true atau false).

$x = 10;
$y = "10";

// Sama dengan (==): true jika nilainya sama, tidak peduli tipe data.
var_dump($x == $y); // Output: bool(true)
echo "<br>";

// Identik (===): true jika nilai DAN tipe datanya sama.
var_dump($x === $y); // Output: bool(false) karena $x integer, $y string
echo "<br>";

// Tidak sama dengan (!= atau <>): true jika nilainya tidak sama.
var_dump($x != 9); // Output: bool(true)
echo "<br>";

// Tidak identik (!==): true jika nilai ATAU tipe datanya tidak sama.
var_dump($x !== $y); // Output: bool(true)
echo "<br>";

// Lebih besar (>)
var_dump($x > 5); // Output: bool(true)
echo "<br>";

// Kurang dari atau sama dengan (<=)
var_dump($x <= 10); // Output: bool(true)
echo "<br>";

// var_dump() digunakan untuk menampilkan informasi detail tentang variabel, termasuk tipe datanya.

?>
