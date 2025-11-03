<?php

// 1. Perulangan `for`
// Digunakan ketika kita tahu persis berapa kali perulangan akan dilakukan.

// Struktur: for (inisialisasi; kondisi; increment/decrement) { ... }

// Inisialisasi: $i = 1 (memulai dari 1)
// Kondisi: $i <= 5 (berhenti jika $i lebih besar dari 5)
// Increment: $i++ (tambahkan 1 setiap selesai perulangan)

echo "Contoh perulangan `for` dari 1 sampai 5:<br>";
for ($i = 1; $i <= 5; $i++) {
    echo "Nomor " . $i . "<br>";
}

?>
