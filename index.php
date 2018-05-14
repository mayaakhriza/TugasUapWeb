    <?php
      session_start();
      include "header.php";

      if(isset($_GET['p'])){
        if($_GET['p']=="home")
          include "home.php";
        else if($_GET['p']=="resep")
          include "resep.php";
        else if($_GET['p']=="admin")
          include "dashboard_admin.php";
        else {
          echo "ERROR 404<br>";
        }
      }else {
        include "home.php";
      }

    ?>
