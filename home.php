<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <!-- import font -->
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Merriweather|Merriweather+Sans" rel="stylesheet">

    <link href="style/index.css" rel="stylesheet">
  </head>
  
<tbody>
  <ul>
    <li><a class="active" href="index.php?p=home">Home</a></li>
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

    <div style="padding:20px 0px;margin-top:30px;height:1500px;">
    <div class="header-wrapper">
      <div class="header">
          <table class="right">
            <tr>
              <td><h1>Veggie & Meats</h1></td>
            </tr>
            <tr>
              <td><img align="center" width="65%" src="images/spr.png" alt=""></td>
            </tr>
          </table>
      </div>
    </div>

    <div class="food">
      <div class="makanan">
          <center><table>
            <img src="images/logo/menu-biru.png">
            <h1 style="font-family: 'Kaushan Script', cursive; color:white;">Resep Bulan Ini</h1>
            <tr  class="menu">
              <td><h1><img src="images/p2.jpg"></h1></td>
              <td><h1><img src="images/p3.jpg"></h1></td>
              <td><h1><img src="images/p4.jpg"></h1></td>
              <td><h1><img src="images/s1.png"></h1></td>
            </tr>
            <tr>
              <td colspan="4"><h1><center>
                <a href="resep.php" class="btn custom-btn-header">MORE</a>
              </center></h1></td>            </tr>
          </table></center>
      </div>
    </div>

    <div class="Resep-bg">
      <div class="resep">
        <center>
        <p style="background-color: #2196F3;margin: 0px; padding: 30px 10px; font-size:20px;font-family: 'Merriweather', serif;">Ada beragam resep loh!</p>
          <table class="jenis">
            <tr>
              <td align="center"><h1><img src="images/logo/004-juice.png"></h1></td>
              <td align="center"><h1><img src="images/logo/002-food-1.png"></h1></td>
              <td align="center"><h1><img src="images/logo/008-lobster.png"></h1></td>
              <td align="center"><h1><img src="images/logo/009-steak.png"></h1></td>
              <td align="center"><h1><img src="images/logo/003-cake.png"></h1></td>
            </tr>
            <tr>
              <td align="center"><h2>Drinks</h2></td>
              <td align="center"><h2>Vegetarian</h2></td>
              <td align="center"><h2>Sea Food</h2></td>
              <td align="center"><h2>Meats</h2></td>
              <td align="center"><h2>Desserts</h2></td>
            </tr>
          </table></center>
      </div>
    </div>

    <div class="footer">
      <center>
        <hr style="width:50%; background-color:#666666; color::#666666; height:1px; border:none;">
        <p>&copy; 2018. All rights reserved.
        Designed and developed by<br>
        Yeni Rosandi<a style="color:#fbb448;"> 1617051034 </a>Maya Akhriza<a style="color:#fbb448;"> 1617051017 </a>Adelia Nada Effendi<a style="color:#fbb448;"> 1617051072</p>
      </center>
    </div>

  </div>

</tbody>
