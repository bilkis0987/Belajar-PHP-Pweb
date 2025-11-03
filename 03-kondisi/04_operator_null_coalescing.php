<?php

// 4. Null Coalescing Operator (??)
// Diperkenalkan di PHP 7. Ini adalah cara yang sangat singkat untuk memeriksa
// apakah sebuah variabel ada (exist) dan tidak null.

// -- Cara lama (dengan isset() dan ternary) --
// Misal kita ingin mengambil data dari form, tapi mungkin datanya tidak ada.
// $nama_user = isset($_POST['nama']) ? $_POST['nama'] : 'Tamu';
// echo $nama_user;


// -- Dengan Null Coalescing Operator --
// Kode di atas bisa disingkat menjadi:
// $nama_user = $_POST['nama'] ?? 'Tamu';

// Contoh lain:
$data_user = ['nama' => 'bilkis'];

// Cek variabel $data_user['nama'], jika ada dan tidak null, gunakan nilainya.
// Jika tidak ada atau null, gunakan 'Tamu'.
$nama = $data_user['nama'] ?? 'Tamu';
echo "Nama User: " . $nama . "<br>"; // Output: Nama User: Bilkis

// Cek variabel $data_user['pekerjaan'], yang tidak ada di dalam array.
$pekerjaan = $data_user['pekerjaan'] ?? 'Belum bekerja';
echo "Pekerjaan: " . $pekerjaan . "<br>"; // Output: Pekerjaan: Belum bekerja

?>
