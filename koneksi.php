<?php 
$host = "localhost"; 
$username = "root"; 
$password = ""; 
$db = "login"; 
$koneksi = mysqli_connect($host, $username, $password) or die ("Koneksi Gagal!"); 
mysqli_select_db($koneksi, $db) or die ("database tidak tersedia"); 
?>