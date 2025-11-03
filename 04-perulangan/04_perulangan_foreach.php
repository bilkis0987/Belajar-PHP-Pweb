<?php

// 4. Perulangan `foreach`
// Ini adalah perulangan yang paling mudah dan paling umum digunakan untuk data array.

// -- Foreach untuk array biasa --
$buah = ["Apel", "Jeruk", "Mangga", "Anggur"];

echo "<h4>Daftar Buah:</h4>";
echo "<ul>";
foreach ($buah as $b) {
    echo "<li>" . $b . "</li>";
}
echo "</ul>";


// -- Foreach untuk array asosiatif (dengan key & value) --
$mahasiswa = [
    "nama" => "bilkis",
    "jurusan" => "Teknik Informatika",
    "semester" => 5
];

echo "<h4>Data Mahasiswa:</h4>";
foreach ($mahasiswa as $key => $value) {
    echo ucfirst($key) . ": " . $value . "<br>";
}

?>
