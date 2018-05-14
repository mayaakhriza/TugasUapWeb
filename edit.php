<?php
session_start();
include "koneksi.php";

$id=$_GET['id'];
$query=mysqli_query($koneksi, "SELECT * FROM posts WHERE id='$id'") or die(mysqli_error($koneksi));
$data=mysqli_fetch_assoc($query);
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Dashboard Edit</title>
    <link href="style/index.css" rel="stylesheet">
  </head>
  <body style="background-color: #333538; color:white;">
    <ul>
      <li><a href="index.php?p=home">Home</a></li>
      <li><a href="index.php?p=resep">Resep</a></li>
      <?php
        if(!isset($_SESSION['username']))
          echo "<li> <a href='login.php'>Login</a></li>";
        else {
          echo "<li> <a href='logout.php'>Logout</a></li>";
          echo "<li> <a class=\"active\" href='index.php?p=admin'>Admin</a></li>";
        }
      ?>
      </ul>
    <h1 style="font-family: 'Kaushan Script', cursive; font-size: 40px;background:#2196F3; color:white; margin:0px; padding:70px 50px 50px 50px">
      <center>Edit Post</center></h1><br>
    <div class="artikel" style="padding: 20px 0px;margin-top:30px;height:550px;">
    <!-- Pengisian artikel -->
    <form action="proses-edit.php" method="post" enctype="multipart/form-data">
      <div>
        <h4>Judul Artikel</h4>
        <input type="hidden" name="id" value="<?php echo $data['id'];?>">
      </div>

      <div>
        <h4>Judul Artikel</h4>
        <input type="text" name="judul" value="<?php echo $data['judul'];?>">
      </div>
      <div>
        <h4>Upload gambar:</h4>
        <input type="file" name="gambar" src="image/" value="<?php echo['gambar'];?>"><br>
      </div>
      <div>
        <h4>Isi artikel:</h4>
         <p><textarea name="teks" rows="8" cols="80" placeholder="Isi artikel..." value="<?php echo $data['teks'];?>"></textarea></p><br>
      </div>
      <div>
        <h4>Nama Penulis:</h4>
        <input type="text" name="penulis" value="<?php echo $data['penulis'];?>">
      </div>
      <div>
        <br><input type="submit" value="Submit"></button>
      </div>
    </form>
    <br>
    <br>
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
