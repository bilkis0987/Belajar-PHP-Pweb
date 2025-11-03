<?php

// 6. Array

// Array terindeks (indexed array)
$buah = ["Mangga", "Jeruk", "Apel", "Pisang", "Anggur", "Semangka"];

echo "Buah favorit saya adalah " . $buah[0];
echo "<br><br>";

// Array asosiatif (associative array)
$mahasiswa = [
    "nama" => "bilkis",
    "jurusan" => "Informatika",
    "semester" => 3
];

echo "Nama Mahasiswa: " . $mahasiswa["nama"];
echo "<br>";

// Menampilkan semua isi array dengan foreach
echo "<br>Daftar Buah dengan for:<br>";
foreach ($buah as $b) {
    echo "- " . $b . "<br>";
}


echo "<br>Daftar Buah dengan while:<br>";
// menampilkan isi array dengan perulangan while
$i = 0;
while($i < count($buah)){
    echo $buah[$i]."<br>";
    $i++;
}
?>
