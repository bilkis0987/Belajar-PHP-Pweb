<?php

// 5. Operator Logika (Logical)
// Operator ini digunakan untuk menggabungkan beberapa kondisi.

$umur = 20;
$punya_sim = true;

// And (&&): Hasilnya true jika KEDUA kondisi true.
echo "Bolehkah menyetir? ";
var_dump($umur > 17 && $punya_sim == true);
// Output: bool(true)
echo "<br>";

// Or (||): Hasilnya true jika SALAH SATU kondisi true.
$hari = "Sabtu";
echo "Apakah hari libur? ";
var_dump($hari == "Sabtu" || $hari == "Minggu");
// Output: bool(true)
echo "<br>";

// Not (!): Membalik nilai boolean.
$sedang_hujan = false;
echo "Apakah cuaca cerah? ";
var_dump(!$sedang_hujan);
// Output: bool(true)
echo "<br>";

?>
