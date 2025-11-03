<?php

// 5. Kontrol Perulangan: `break` dan `continue`

// -- Contoh `break` --
// `break` digunakan untuk menghentikan (keluar dari) perulangan secara paksa.

echo "<h4>Contoh `break`</h4>";
echo "Mencari angka 5 dalam perulangan 1-10:<br>";
for ($i = 1; $i <= 10; $i++) {
    echo "Angka " . $i . "... ";
    if ($i == 5) {
        echo "Ditemukan! Perulangan berhenti.";
        break; // Hentikan loop jika $i sama dengan 5
    }
    echo "<br>";
}


// -- Contoh `continue` --
// `continue` digunakan untuk melewati sisa blok kode pada iterasi saat ini
// dan langsung loncat ke iterasi berikutnya.

echo "<hr><h4>Contoh `continue`</h4>";
echo "Menampilkan angka ganjil dari 1-10:<br>";
for ($j = 1; $j <= 10; $j++) {
    if ($j % 2 == 0) { // Jika $j adalah angka genap
        continue; // Lewati iterasi ini, jangan cetak angkanya
    }
    echo "Angka " . $j . "<br>";
}

?>
