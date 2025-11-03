<?php

// 3. Perulangan `do-while`
// Mirip seperti `while`, tapi blok kode di dalamnya dijamin berjalan minimal satu kali
// sebelum kondisi dicek.

$y = 10;

echo "Contoh perulangan `do-while`:<br>";
do {
    echo "Nilai y saat ini: " . $y . "<br>";
    $y++;
} while ($y <= 5); // Kondisi dicek di akhir, dan hasilnya false (10 tidak <= 5)

echo "<br>Meskipun kondisi dari awal sudah false, blok `do` tetap berjalan satu kali.";

?>
