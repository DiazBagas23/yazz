<?php
// koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database_name";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// cek koneksi ke database
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// ambil data dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// query untuk mencari user dengan username dan password tertentu
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);

// cek apakah user ditemukan
if (mysqli_num_rows($result) > 0) {
    // user ditemukan, tampilkan pesan berhasil
    echo "Login berhasil!";
} else {
    // user tidak ditemukan, tampilkan pesan gagal
    echo "Login gagal!";
}

mysqli_close($conn);
?>
