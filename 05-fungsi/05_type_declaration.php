<?php

// 5. Deklarasi Tipe (Type Declaration / Type Hinting)
// Ini memungkinkan kita untuk menentukan tipe data yang diharapkan untuk parameter
// dan untuk nilai kembalian (return value) dari sebuah fungsi.
// Ini membuat kode lebih kuat (robust), lebih jelas, dan lebih mudah dideteksi kesalahannya.

// Aktifkan mode strict untuk memastikan PHP benar-benar menerapkan aturan tipe data.
declare(strict_types=1);
ini_set('display_errors', 1);

// Parameter $a dan $b harus berupa integer (int).
// Nilai kembalian (return value) dari fungsi ini juga harus berupa integer (: int).
function jumlahkan(int $a, int $b): int {
    return $a + $b;
}

echo "Hasil penjumlahan: " . jumlahkan(5, 10) . "<br>"; // Output: 15

// Jika kita mencoba memanggil dengan tipe data yang salah, PHP akan error.
// echo jumlahkan(5, "10"); // Ini akan menyebabkan Fatal Error karena mode strict


// Contoh dengan tipe data lain
function sapaUser(string $nama, int $umur): string {
    return "Halo, {$nama}! Anda berumur {$umur} tahun.";
}

echo sapaUser("bilkis", 17);

?>
