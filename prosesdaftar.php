<?php 
include "koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];
$cekuser = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username' && password = '$password'") ;

if(mysqli_num_rows($cekuser) <> 0) {
echo "Username Sudah Terdaftar!";
echo "<a href= 'daftar.php'> Back</a>";
} else {
if(!$username || !$password) {
echo "Masih ada data yang kosong!";
echo "<a href='daftar.php'> Back</a>";
} else {
    $simpan = mysqli_query($koneksi, "INSERT INTO user(username, password) VALUES('$username','$password')");
    if($simpan) {
    echo "Pendaftaran Sukses, Silahkan <a href='login.php'>Login</a>";
    } else {
    echo "Proses Gagal!";
    }
    }
    }
    ?>


