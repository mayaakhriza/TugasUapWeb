<?php
/*
Author: Javed Ur Rehman
Website: http://www.allphptricks.com/
*/
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>DAFTAR</title>
<link href="style/style.css" rel="stylesheet" type="text/css" media="screen"/>
</head>
<body>
<?php
	require('koneksi.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['username'])){
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($koneksi,$username); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($koneksi,$password);

		$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, trn_date) VALUES ('$username', '".md5($password)."', '$trn_date')";
        $result = mysqli_query($koneksi,$query);
        if($result){
            echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
<div class="form">
<form name="daftar" action="" method="post">
<table>
<tr id="header">
    <td colspan="2"><h2>
DAFTAR</h2>
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
<td colspan="2" align="right"><input type="submit" value="Daftar" /> <input type="reset" value="Reset" /></td>
</tr>
<tr>
    <td colspan="2" align="center">Sudah Punya akun ? <a href="login.php"><b>Login</b></a></td>
</tr>
</table>
</form>
<br /><br />
<div class="footer"; style="color:black"> <center> Copyright &copy; 2018. All rights reserved. Designed and developed by YeniRosandi_1617051034 MayaAkhriza_1617051017 AdeliaNadaEffendi_1617051072</center></div>
</div>
<?php } ?>

</body>

</html>
