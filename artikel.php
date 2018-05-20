<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Artikel</title>
    <link href="style/index.css" rel="stylesheet">
    <style>
    .isi img{
      margin: 5px;
      width: 700px;
      /* height: 420px; */
    }
    </style>
  </head>
  <body>
    <div class="isi" style="padding: 20px 0px 0px 0px;margin-top:30px;">
      <ul>
        <li><a href="index.php?p=home">Home</a></li>
        <li><a href="index.php?p=resep">Resep</a></li>
        <?php
          if(!isset($_SESSION['username']))
            echo "<li> <a href='login.php'>Login</a></li>";
          else {
            echo "<li> <a href='logout.php'>Logout</a></li>";
            echo "<li> <a href='index.php?p=admin'>Admin</a></li>";
          }
        ?>
      </ul>
        <?php
          include "koneksi.php";
          $id_artikel=abs(intval($_GET['id_artikel']));
          $db=mysqli_connect("localhost","root","","blogapp");
          $sql="SELECT * FROM posts WHERE id='$id_artikel' LIMIT 1";
          $result= mysqli_query($db, $sql);

          while ($row= mysqli_fetch_array($result)){
          //baris 1
          echo "<b>"."<center><h1 style=\"font-family: 'Kaushan Script', cursive; font-size: 40px;margin:0px; padding: 50px;background-color: #f3c30f;\">".strtoupper($row["judul"])."</h1></center>"."</b>"."<br>";
          echo "<div class=\"artikel\">";
          echo "<center>"."<img src='image/".$row['gambar']."'>"."</center>"."<br>". //baris 2
                         "<p align=justify>".$row["teks"]."</p>"."<br>"."<br>". //baris 3
                         "<b>".$row["penulis"]." pada " //baris 4
                              .$row["waktu"]."</b>"."<br>"; //baris 5
          }
        ?>
      </div>
    </div>

    <div style="margin:30px 80px;">
      <a style="font-size:30px; color:black; text-decoration:none;"href="resep.php"> <img src="images/logo/001-left-arrow.png"> Back </a>
    </div>

    <div class="footer">
      <center>
        <hr style="width:50%; background-color:#666666; color::#666666; height:1px; border:none;">
        <p>&copy; 2018. All rights reserved.
        Designed and developed by<br>
        Yeni Rosandi<a style="color:#fbb448;"> 1617051034 </a>Maya Akhriza<a style="color:#fbb448;"> 1617051017 </a>Adelia Nada Effendi<a style="color:#fbb448;"> 1617051072</p>
      </center>
    </div>
  </body>
</html>
