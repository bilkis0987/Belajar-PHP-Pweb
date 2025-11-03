<?php

// define(name, value)
define("NAMA", "bilkis");
define("UMUR", 17);

echo "Nama: " . NAMA;
echo "<br>";
echo "Umur: " . UMUR;
echo "<hr>";

// Contoh konstanta case-insensitive (DEPRECATED di PHP 7.3, DIHAPUS di PHP 8.0)
// define("GREETING", "Hello world!", true);
// echo greeting; 
// echo "<hr>";

// Contoh konstanta dengan array
define("BUAH", [
    "Apel",
    "Jeruk",
    "Mangga"
]);

echo "Buah favorit saya adalah " . BUAH[1]; // Output: Jeruk

?>