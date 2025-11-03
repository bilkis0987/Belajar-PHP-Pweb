<?php

// 2. Operator String

// Operator string di PHP hanya ada satu, yaitu operator penggabungan (concatenation)
// yang dilambangkan dengan titik (.).

$nama_depan = "bilkis";
$nama_belakang = "angsiano saputra";

// Menggabungkan dua variabel string
$nama_lengkap = $nama_depan . $nama_belakang;
echo $nama_lengkap; // Output: bilkisangsianosaputra

echo "<br>";

// Menggabungkan dengan spasi
$nama_lengkap_spasi = $nama_depan . " " . $nama_belakang;
echo $nama_lengkap_spasi; // Output: bilkis angsiano saputra

?>
