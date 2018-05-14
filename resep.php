<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Resep</title>
    <link href="style/index.css" rel="stylesheet">
  </head>
  <body>
    <div style="padding: 20px 0px;margin-top:30px;height:1500px;">
    <ul>
      <li><a href="index.php?p=home">Home</a></li>
      <li><a class="active"href="index.php?p=resep">Resep</a></li>
      <?php
        if(!isset($_SESSION['username']))
          echo "<li> <a href='login.php'>Login</a></li>";
        else {
          echo "<li> <a href='logout.php'>Logout</a></li>";
          echo "<li> <a href='index.php?p=admin'>Admin</a></li>";
        }
      ?>
      </ul>
      <!-- Isi artikel -->
      <center><h1 style="font-family: 'Kaushan Script', cursive; font-size: 40px;margin:0px; padding: 50px; color: white;background-color: #4f3e35;"> Resep Hari Ini </h1></center>
      <hr>
      <div class="artikel">
        <?php
          include "koneksi.php";
          $db=mysqli_connect("localhost","root","","blogapp");
          $sql= "SELECT * FROM posts ORDER BY id DESC";
          $result= mysqli_query($db, $sql);

          if(mysqli_num_rows($result) > 0){
            while ($row= mysqli_fetch_array($result)) {
              echo "<h2>"."<b>".strtoupper($row["judul"])."</b>"."</h2>"."<br>";//baris 1
              echo "<center>"."<img style=\"margin: 5px; width: 500px; height: 280px;\" src='image/".$row['gambar']."'>"."</center>"."<br>". //baris 2
                   "<p align=justify>".substr($row["teks"],0,350)."</p>". //Dibatasi agar tidak full text
                   "<a style=\"color:#f7bd36;\" href= 'artikel.php?id_artikel=".$row['id']."'>Read More</a>".
                   "<br>"."<br>". //baris 3
                   "<b>".$row["penulis"]." pada " //baris 4
                        .$row["waktu"]."</b>"."<br>"."<hr>"; //baris 5
            }
          }

          else{
            echo "Belum ada resep nih, ayo daftarkan diri dan share ide resep kamu disini :D";
          }
          $koneksi->close();
        ?>
        </div>
        <div class="footer" style="background-color: #2196F3; color: white;" >
          <center>
            <hr style="width:50%; background-color:#666666; color::#666666; height:1px; border:none;">
            <p>&copy; 2018. All rights reserved.
            Designed and developed by<br>
            Yeni Rosandi<a style="color:#fbb448;"> 1617051034 </a>Maya Akhriza<a style="color:#fbb448;"> 1617051017 </a>Adelia Nada Effendi<a style="color:#fbb448;"> 1617051072</p>
          </center>
        </div>
    </div>
