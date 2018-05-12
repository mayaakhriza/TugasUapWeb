<?php 
session_start();
include "koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];
$cekuser = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username' && password = '$password'") ;
$jumlah = mysqli_num_rows($cekuser);

$hasil = mysqli_fetch_array($cekuser);
if($jumlah == 1) {
	$_SESSION['username'] = $hasil['username'];
header('location:halamanutama.html');
} else {
if($password == $hasil['password']) {
echo "Password Salah!";
echo "<a href='login.php'>&amp;amp;laquo; Back</a>";
} 
else {
	echo "Username Belum Terdaftar!";
	echo "<a href='login.php'>? Back</a>";
}
}
?>

