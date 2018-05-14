<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link href="style/style.css" rel="stylesheet" type="text/css" media="screen"/>
	</head>
<body>
	<?php
	include "header.php";

		require('koneksi.php');
		session_start();
		// Jika formulir ter-submit, masukkan data ke dalam basis data.
		if (isset($_POST['username'])){
			
			$username = stripslashes($_REQUEST['username']);
			$username = mysqli_real_escape_string($koneksi,$username); 
			$password = stripslashes($_REQUEST['password']);
			$password = mysqli_real_escape_string($koneksi,$password);
			
		//Memeriksa apakah user sudah ada dalam basis data atau belum
			$query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
			$result = mysqli_query($koneksi,$query) or die(mysqli_error());
			$rows = mysqli_num_rows($result);
			if($rows==1){
				$_SESSION['username'] = $username;
				header("Location: dashboard_admin.php"); // pindah ke halaman index.php
				}else{
					echo "<h1><center> <br><br><br> Password Salah!</h1>";
					echo "<center><br><a href='login.php'>Back</a>";
					} 
		}else{
			?>
				
					<div class="form">
						<form action="" method="post" name="login">
						<table align="center">
          <tr id="header">
            <td colspan="2"><h2>LOGIN</h2></td>
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
        </table>
      </form>
    </center>
    <div class="footer"; style="color:black"> <center> Copyright &copy; 2018. All rights reserved. Designed and developed by YeniRosandi_1617051034 MayaAkhriza_1617051017 AdeliaNadaEffendi_1617051072</center></div>
  </div>
	<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link href="style/style.css" rel="stylesheet" type="text/css" media="screen"/>
	</head>
<body>
	<?php
		include "header.php";
		require('koneksi.php');
		session_start();
		// Jika formulir ter-submit, masukkan data ke dalam basis data.
		if (isset($_POST['username'])){
			
			$username = stripslashes($_REQUEST['username']);
			$username = mysqli_real_escape_string($koneksi,$username); 
			$password = stripslashes($_REQUEST['password']);
			$password = mysqli_real_escape_string($koneksi,$password);
			
		//Memeriksa apakah user sudah ada dalam basis data atau belum
			$query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
			$result = mysqli_query($koneksi,$query) or die(mysqli_error());
			$rows = mysqli_num_rows($result);
			if($rows==1){
				$_SESSION['username'] = $username;
				header("Location: dashboard_admin.php"); // pindah ke halaman index.php
				}else{
					echo "<h1><center> <br><br><br> Password Salah!</h1>";
					echo "<center><br><a href='login.php'>Back</a>";
					} 
		}else{
			?>
				
					<div class="form">
						<form action="" method="post" name="login">
						<table align="center">
          <tr id="header">
            <td colspan="2"><h2>LOGIN</h2></td>
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
        </table>
      </form>
    </center>
    <div class="footer"; style="color:black"> <center> Copyright &copy; 2018. All rights reserved. Designed and developed by YeniRosandi_1617051034 MayaAkhriza_1617051017 AdeliaNadaEffendi_1617051072</center></div>
  </div>
				<?php } ?>
</body>
</html>
				<?php } ?>
</body>
<?php include "footer.php"?>
</html>
