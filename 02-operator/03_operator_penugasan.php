<?php

// 3. Operator Penugasan (Assignment)

// Operator penugasan dasar adalah sama dengan (=)
$angka = 10;
echo "Nilai awal: " . $angka . "<br>";

// Operator penugasan gabungan

// Penjumlahan (+=)
$angka += 5; // sama dengan $angka = $angka + 5;
echo "Setelah ditambah 5: " . $angka . "<br>"; // Output: 15

// Pengurangan (-=)
$angka -= 3; // sama dengan $angka = $angka - 3;
echo "Setelah dikurangi 3: " . $angka . "<br>"; // Output: 12

// Perkalian (*=)
$angka *= 2; // sama dengan $angka = $angka * 2;
echo "Setelah dikali 2: " . $angka . "<br>"; // Output: 24

// Pembagian (/=)
$angka /= 4; // sama dengan $angka = $angka / 4;
echo "Setelah dibagi 4: " . $angka . "<br>"; // Output

// Modulus (%=)
$angka %= 4; // sama dengan $angka = $angka % 4;
echo "Setelah modulus 4: " . $angka . "<br>"; // Output: 2

// Penggabungan string (.=)
$kalimat = "Halo, ";
$kalimat .= "Dunia!"; // sama dengan $kalimat = $kalimat . "Dunia!";
echo $kalimat; // Output: Halo, Dunia!

?>
