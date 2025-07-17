<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1. Ambil dan bersihkan data input
    $name = htmlspecialchars($_POST["name"]);
    $pesan = htmlspecialchars($_POST["pesan"]);
    $gmail = htmlspecialchars($_POST["gmail"]);

    // 2. Tampilkan hasil
    echo "<h2>Terima kasih atas pesan Anda!</h2>";
    echo "<p><strong>Nama:</strong> $name</p>";
    echo "<p><strong>Pesan:</strong> $pesan</p>";
    echo "<p><strong>Email:</strong> $gmail</p>";
} else {
    // 3. Redirect jika akses langsung
    header("Location: index.html"); 
    exit;
}