<?php
  include "koneksi.php";

  //get data
  $id=$_POST['id'];
  $judul= $_POST['judul'];
  $teks= $_POST['teks'];
  $penulis= $_POST['penulis'];
  //data gambar
  $gambar= $_FILES['gambar']['name'];
  $tmp_name= $_FILES['gambar']['tmp_name'];

  $input = mysqli_query($koneksi, "UPDATE posts SET judul='$judul', gambar='$gambar', teks='$teks', penulis='$penulis' WHERE id='$id'" ) or die(mysqli_error($koneksi));

  if($input){
      echo "
      <script>
        alert('Data berhasil di update.');
        window.location='dashboard_admin.php';
      </script>
      ";
  }else{
      echo "
      <script>
        alert('Data gagal di update.');
        window.location='edit.php';
      </script>
      ";
  }


?>
