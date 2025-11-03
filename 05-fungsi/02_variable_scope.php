<?php

// 2. Lingkup Variabel (Variable Scope)

// Variabel Global
// Variabel yang didefinisikan di luar fungsi memiliki lingkup global.
$nama = "bilkis";

function cobaSapa() {
    // Variabel Lokal
    // Variabel yang didefinisikan di dalam fungsi memiliki lingkup lokal.
    // Variabel ini hanya ada di dalam fungsi ini.
    $pesan = "Halo!";

    // Mencoba mengakses variabel global dari dalam fungsi akan GAGAL.
    // echo "Menyapa {$nama}"; // Ini akan menghasilkan error/notice

    echo "Di dalam fungsi: " . $pesan;
}

cobaSapa();

echo "<br>Di luar fungsi: " . $nama;
// echo $pesan; // Ini akan menghasilkan error karena $pesan hanya ada di dalam fungsi


// --- Cara Mengakses Variabel Global dari Dalam Fungsi ---
echo "<hr>";

$kota = "subang";

function sebutkanLokasi() {
    // Gunakan keyword `global` untuk memberitahu PHP kita ingin menggunakan
    // variabel global $kota, bukan membuat variabel lokal baru.
    global $kota;
    echo "Saya tinggal di kota " . $kota;
}

sebutkanLokasi();

?>
