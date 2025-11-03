<?php

// 2. Array Multi-dimensi
// Ini adalah array yang berisi satu atau lebih array di dalamnya.

$mahasiswa = [
    // Elemen 0
    [
        "nama" => "Budi",
        "nim" => "101010",
        "jurusan" => "Informatika"
    ],
    // Elemen 1
    [
        "nama" => "Siti",
        "nim" => "101011",
        "jurusan" => "Sistem Informasi"
    ],
    // Elemen 2
    [
        "nama" => "Andi",
        "nim" => "101012",
        "jurusan" => "Informatika"
    ]
];

// Mengakses elemen array multi-dimensi
// Mengakses nama dari mahasiswa pertama (elemen 0)
echo "Nama mahasiswa pertama: " . $mahasiswa[0]["nama"];
echo "<hr>";

// Menampilkan semua data dengan perulangan `foreach` bersarang
echo "<h4>Daftar Semua Mahasiswa:</h4>";
foreach ($mahasiswa as $m) {
    echo "<ul>";
    echo "<li>Nama: " . $m["nama"] . "</li>";
    echo "<li>NIM: " . $m["nim"] . "</li>";
    echo "<li>Jurusan: " . $m["jurusan"] . "</li>";
    echo "</ul>";
}

?>
