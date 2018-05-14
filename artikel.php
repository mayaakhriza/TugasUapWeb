<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Artikel</title>
    <style>
    img{
      margin: 5px;
      width: 500px;
      height: 280px;
    }
    </style>
  </head>
  <body>

  </body>
</html>
<?php
  include "koneksi.php";
  $id_artikel=abs(intval($_GET['id_artikel']));
  $db=mysqli_connect("localhost","root","","blogapp");
  $sql="SELECT * FROM posts WHERE id='$id_artikel' LIMIT 1";
  $result= mysqli_query($db, $sql);

  while ($row= mysqli_fetch_array($result)){
  echo "<h2>"."<b>".$row["judul"]."</b>"."</h2>"."<br>";//baris 1
  echo "<center>"."<img src='image/".$row['gambar']."'>"."</center>"."<br>". //baris 2
                 "<p align=justify>".$row["teks"]."</p>"."<br>"."<br>". //baris 3
                 "<b>".$row["penulis"]." pada " //baris 4
                      .$row["waktu"]."</b>"."<br>"; //baris 5
  }
  include "footer.php";
?>
