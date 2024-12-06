<?php
// Mulai sesi untuk menyimpan perubahan judul
session_start();

// Tentukan judul statis yang ingin ditampilkan
$staticTitle = "Selamat Datang!";

// Menyimpan judul ke dalam sesi, jika belum ada
if (!isset($_SESSION['viewTitle'])) {
    $_SESSION['viewTitle'] = $staticTitle;
}

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Judul</title>
</head>
<body>
    <h1><?php echo $_SESSION['viewTitle']; ?></h1>  <!-- Menampilkan judul yang sudah disimpan dalam sesi -->
</body>
</html>
