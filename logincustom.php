<?php
// Memeriksa apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data yang dikirimkan dari form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Anda dapat melakukan verifikasi kredensial di sini.
    // Contoh sederhana, dengan username "admin" dan password "password"
    $valid_username = "kyrie";
    $valid_password = "vonsbonitatis";

    if ($username == $valid_username && $password == $valid_password) {
        // Kredensial valid, arahkan ke halaman yang diinginkan
        header("Location: halaman_beranda.php");
        exit;
    } else {
        // Kredensial tidak valid, tampilkan pesan error dan tombol "Coba Lagi"
        echo '<div style="text-align: center; margin: 20px;">';
        echo '<p style="color: red; font-size: 18px;">Username atau password salah. Silakan coba lagi.</p>';
        echo '<a href="formlogin.html" style="text-decoration: none; background-color: #007BFF; color: #fff; padding: 10px 20px; border-radius: 5px; font-size: 16px;">Coba Lagi</a>';
        echo '</div>';
    }
}
?>
