<?php
include 'koneksi.php';
//get data
$judul= $_POST['judul'];
$teks= $_POST['teks'];
$penulis= $_POST['penulis'];
//data gambar
$gambar= $_FILES['gambar']['name'];
$tmp_name= $_FILES['gambar']['tmp_name'];

session_start();
$username=$_SESSION['username'];
$sql="INSERT INTO posts(judul, gambar, teks, penulis)
      VALUES ('$judul','$gambar','$teks', '$penulis')";
mysqli_query($db, $sql);

$result=$koneksi->query($sql);

if(move_uploaded_file($tmp_name,"image/".$gambar)){
  echo "
  <script>
  alert('Gambar berhasil diupload!');
  </script>
  ";
}else{
  echo "
  <script>
  alert('Error! Tidak dapat mengupload gambar.');
  </script>
  ";
}

header("Location:dashboard_admin.php");
?>
