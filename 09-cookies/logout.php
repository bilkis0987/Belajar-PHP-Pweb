<?php
// Hapus cookie dengan mengatur waktunya ke masa lalu
setcookie("username", "", time() - 0);

// Redirect kembali ke halaman utama
header("Location: index.php");
exit;
?>
