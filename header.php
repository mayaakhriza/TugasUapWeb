<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <link href="style/index.css" rel="stylesheet">
  </head>
  <body>
    <ul>
      <li><a href="index.php?p=home">Home</a></li>
      <li><a  href="index.php?p=resep">Resep</a></li>
      <?php
        if(!isset($_SESSION['username']))
          echo "<li> <a class=\"active\" href='login.php'>Login</a></li>";
        else {
          echo "<li> <a href='logout.php'>Logout</a></li>";
          echo "<li> <a href='index.php?p=admin'>Admin</a></li>";
        }
      ?>
      </ul>
