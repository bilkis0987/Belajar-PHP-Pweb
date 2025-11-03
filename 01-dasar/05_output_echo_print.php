<?php

// Fungsi Output: echo dan print

// --- ECHO ---
// echo adalah konstruksi bahasa, bukan fungsi. Bisa digunakan dengan atau tanpa kurung ().
// echo bisa menampilkan beberapa nilai yang dipisahkan koma.
// echo tidak memiliki nilai kembalian (return value).

echo "<h4>Menggunakan echo</h4>";
echo "Ini string pertama", " ini string kedua."; // Menampilkan beberapa nilai
echo "<br>";
echo("echo dengan tanda kurung.");
echo "<br>";

$teks = "Belajar PHP";
echo "Saya sedang " . $teks;


// --- PRINT ---
// print juga merupakan konstruksi bahasa, bukan fungsi. Bisa digunakan dengan atau tanpa kurung.
// print hanya bisa menampilkan satu nilai.
// print selalu memiliki nilai kembalian 1 (return value), sehingga bisa digunakan dalam ekspresi.

echo "<hr><h4>Menggunakan print</h4>";
print "Hello dari print!";
print("<br>print dengan tanda kurung.");

// Contoh print dalam ekspresi (jarang digunakan)
if (print "<br>Cek nilai kembalian print.") {
    echo " -> Print mengembalikan nilai 1.";
}

// Kesimpulan: Keduanya hampir identik. `echo` sedikit lebih cepat karena tidak punya
// nilai kembalian. Kebanyakan developer PHP menggunakan `echo`.

?>
