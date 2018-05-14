<?php
  include "koneksi.php";
  $id= $_GET['id'];
  $hapus= mysqli_query($koneksi, "DELETE FROM posts WHERE id='$id'") or die(mysqli_error($koneksi));

  if($hapus){
      echo "
      <script>
        alert('Data berhasil di hapus.');
        window.location='dashboard_admin.php';
      </script>
      ";
  }else{
      echo "
      <script>
        alert('Data gagal di hapus.');
        window.location='dashboard_admin.php';
      </script>
      ";
  }

?>
