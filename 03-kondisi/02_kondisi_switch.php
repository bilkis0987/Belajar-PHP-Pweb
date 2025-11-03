<?php

// 2. Struktur Kondisi `switch`
// Switch digunakan untuk melakukan pengecekan pada satu variabel terhadap banyak nilai.

$hari = "Senin";

echo "Hari ini hari: {$hari} <br>";

switch ($hari) {
    case "Senin":
        echo "Semangat bekerja!";
        break; // 'break' penting agar pengecekan berhenti jika kondisi terpenuhi
    case "Jumat":
        echo "Selamat menyambut akhir pekan!";
        break;
    case "Sabtu":
    case "Minggu":
        echo "Selamat berlibur!";
        break;
    default:
        // 'default' akan dijalankan jika tidak ada 'case' yang cocok
        echo "Hari biasa, tetap semangat!";
        break;
}

?>
