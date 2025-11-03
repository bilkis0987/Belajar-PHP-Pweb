<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'] ?? '';
    $email = $_POST['email'] ?? '';
    $errors = [];

    // Validasi Nama
    if (empty(trim($nama))) {
        $errors[] = "Nama lengkap wajib diisi.";
    }

    // Validasi Email
    if (empty(trim($email))) {
        $errors[] = "Alamat email wajib diisi.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format alamat email tidak valid.";
    }

    // Jika ada error, simpan ke session dan redirect kembali
    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        $_SESSION['old_data'] = $_POST;
        header("Location: 01_form_post.php");
        exit();
    }

    // Jika tidak ada error, tampilkan data
    echo "<h2>Terima Kasih Telah Mendaftar!</h2>";
    echo "Nama Anda: " . htmlspecialchars($nama);
    echo "<br>";
    echo "Email Anda: " . htmlspecialchars($email);

} else {
    // Jika file diakses langsung, redirect ke form
    header("Location: 01_form_post.php");
    exit();
}

?>
