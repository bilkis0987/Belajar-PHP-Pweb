<?php

// Menggunakan const untuk mendefinisikan konstanta
const AUTHOR = "sanquer";
const APP_VERSION = "1.0.0";

echo "Author: " . AUTHOR;
echo "<br>";
echo "App Version: " . APP_VERSION;

// Perbedaan utama antara const dan define():
// 1. const adalah konstruksi bahasa, sedangkan define() adalah fungsi.
// 2. const didefinisikan pada waktu kompilasi, sedangkan define() didefinisikan pada waktu proses (runtime).
// 3. const tidak dapat digunakan di dalam blok kondisional (if/else), loop, atau fungsi.
// 4. const selalu case-sensitive.

?>