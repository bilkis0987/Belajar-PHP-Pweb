<?php
session_start();

// Ambil data lama jika ada (untuk mengisi kembali form)
$old_data = $_SESSION['old_data'] ?? [];
unset($_SESSION['old_data']);

// Ambil pesan error jika ada
$errors = $_SESSION['errors'] ?? [];
unset($_SESSION['errors']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulir Pendaftaran</title>
    <style>
        .error {
            color: red;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <h2>Formulir Pendaftaran</h2>

    <?php if (!empty($errors)): ?>
        <div class="error-messages">
            <strong>Terdapat kesalahan:</strong>
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li><?php echo $error; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="02_proses_form.php" method="POST">
        <label for="nama">Nama Lengkap:</label><br>
        <input type="text" id="nama" name="nama" value="<?php echo htmlspecialchars($old_data['nama'] ?? ''); ?>">
        <br><br>
        <label for="email">Alamat Email:</label><br>
        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($old_data['email'] ?? ''); ?>">
        <br><br>
        <button type="submit">Daftar</button>
    </form>
</body>
</html>
<?php
// Hapus session setelah digunakan
session_unset();
session_destroy();
?>
