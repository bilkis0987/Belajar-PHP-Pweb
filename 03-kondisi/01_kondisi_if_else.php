<?php

// 3. Struktur Kontrol (Kondisi)

$nilai = 85;

echo "Nilai Anda: " . $nilai;
echo "<br>";

if ($nilai >= 80) {
    echo "Predikat: Sangat Baik (A)";
} elseif ($nilai >= 70) {
    echo "Predikat: Baik (B)";
} elseif ($nilai >= 60) {
    echo "Predikat: Cukup (C)";
} else {
    echo "Predikat: Kurang (D)";
}

?>
