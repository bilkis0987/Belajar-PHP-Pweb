<?php

// 6. Operator Increment (++) & Decrement (--)
// Operator ini digunakan untuk menaikkan atau menurunkan nilai variabel sebanyak 1.

// -- Post-increment --
$a = 5;
echo "<h4>Post-increment</h4>";
echo "Nilai \$a awal: {$a} <br>";
echo "Tampilkan dulu, baru tambah: " . $a++ . "<br>"; // Tampilkan 5, lalu $a menjadi 6
echo "Nilai \$a sekarang: {$a} <br>"; // Tampilkan 6

// -- Pre-increment --
$b = 5;
echo "<h4>Pre-increment</h4>";
echo "Nilai \$b awal: {$b} <br>";
echo "Tambah dulu, baru tampilkan: " . ++$b . "<br>"; // $b menjadi 6, lalu tampilkan 6
echo "Nilai \$b sekarang: {$b} <br>"; // Tampilkan 6

// Hal yang sama berlaku untuk decrement (--)

// -- Post-decrement --
$c = 5;
echo "<h4>Post-decrement</h4>";
echo "Nilai \$c awal: {$c} <br>";
echo "Tampilkan dulu, baru kurang: " . $c-- . "<br>"; // Tampilkan 5, lalu $c menjadi 4
echo "Nilai \$c sekarang: {$c} <br>"; // Tampilkan 4

?>
