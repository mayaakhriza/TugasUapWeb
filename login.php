<?php session_start();
if(isset($_SESSION['username'])) {
header("location:halamanutama.html"); }
include "koneksi.php";
?>
<html>
<head>
 <title>form login</title>
 <link href="style/style.css" rel="stylesheet" type="text/css" media="screen"/>
</head>
<body>

<center>
<form action="proseslogin.php" method="post">
<table>
<tr id="header">
    <td colspan="2"><h2>
LOGIN</h2>
</td>
   </tr>
<tr>
<td>Username</td>
<td><input name="username" type="text" /></td>
</tr>
<tr>
<td>Password</td>
<td><input name="password" type="password" /></td>
</tr>
<tr>
<td colspan="2" align="right"><input type="submit" value="Login" /> <input type="reset" value="Reset" /></td>
</tr>
<tr>
<td colspan="2" align="center">Belum Punya akun ? <a href="daftar.php"><b>Daftar</b></a></td>
</tr>
</body>
</table>
</form>
</center>
<div class="footer"; style="color:white"> <center> Copyright &copy; 2018. All rights reserved. Designed and developed by YeniRosandi_1617051034 MayaAkhriza_1617051017 AdeliaNadaEffendi_1617051072</center></div>
</html>