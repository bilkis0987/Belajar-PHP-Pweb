<?php
include 'config.php';

// Menangani form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $pesan = htmlspecialchars($_POST['pesan']);

    // Menyimpan data ke database
    $sql = "INSERT INTO buku_tamu (nama, email, pesan) VALUES (:nama, :email, :pesan)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nama', $nama);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':pesan', $pesan);
    
    if ($stmt->execute()) {
        $success = "Pesan berhasil ditambahkan!";
    } else {
        $error = "Terjadi kesalahan saat menyimpan pesan.";
    }
}

// Mengambil semua pesan dari database
$sql = "SELECT * FROM buku_tamu ORDER BY tanggal DESC";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$pesan_list = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu Sederhana</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"], input[type="email"], textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        textarea {
            height: 100px;
            resize: vertical;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        .pesan {
            border: 1px solid #ddd;
            padding: 15px;
            margin: 10px 0;
            border-radius: 4px;
            background-color: #f9f9f9;
        }
        .pesan .pengirim {
            font-weight: bold;
            color: #333;
        }
        .pesan .tanggal {
            font-size: 0.8em;
            color: #666;
            float: right;
        }
        .pesan .isi {
            margin-top: 10px;
            padding-top: 10px;
            border-top: 1px solid #eee;
        }
        .pesan .email {
            color: #666;
            font-style: italic;
            font-size: 0.9em;
        }
        .pesan:after {
            content: "";
            display: table;
            clear: both;
        }
        .alert {
            padding: 10px;
            margin: 10px 0;
            border-radius: 4px;
        }
        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        .alert-error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Buku Tamu Sederhana</h1>
        
        <?php if (isset($success)): ?>
            <div class="alert alert-success"><?php echo $success; ?></div>
        <?php endif; ?>
        
        <?php if (isset($error)): ?>
            <div class="alert alert-error"><?php echo $error; ?></div>
        <?php endif; ?>
        
        <form method="POST" action="">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email">
            </div>
            
            <div class="form-group">
                <label for="pesan">Pesan:</label>
                <textarea id="pesan" name="pesan" placeholder="Tulis pesan Anda di sini..." required></textarea>
            </div>
            
            <button type="submit">Kirim Pesan</button>
        </form>
        
        <h2>Daftar Pesan</h2>
        <?php if (count($pesan_list) > 0): ?>
            <?php foreach ($pesan_list as $pesan): ?>
                <div class="pesan">
                    <div class="pengirim"><?php echo htmlspecialchars($pesan['nama']); ?></div>
                    <?php if (!empty($pesan['email'])): ?>
                        <div class="email"><?php echo htmlspecialchars($pesan['email']); ?></div>
                    <?php endif; ?>
                    <div class="tanggal"><?php echo date('d M Y H:i', strtotime($pesan['tanggal'])); ?></div>
                    <div class="isi"><?php echo nl2br(htmlspecialchars($pesan['pesan'])); ?></div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Belum ada pesan di buku tamu.</p>
        <?php endif; ?>
    </div>
</body>
</html>