<?php

// 2. Perulangan `while`
// Digunakan ketika perulangan akan terus berjalan selama kondisi bernilai true.
// Pengecekan kondisi dilakukan di awal.

// Inisialisasi variabel di luar loop
$x = 1;

echo "Contoh perulangan `while` dari 1 sampai 5:<br>";
while ($x <= 5) {
    echo "Angka " . $x . "<br>";
    
    // Penting: jangan lupa increment/decrement agar loop tidak berjalan selamanya (infinite loop)
    $x++;
}

?>
