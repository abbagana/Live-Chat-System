<?php
/*
Author: Muhammad Abba Gana
Website: www.guidetricks.blogspot.com
*/
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="css/login.css" />
</head>
<!--
		*******************************************************************************

		I M P O R T A N T -- N O T I C E
		- - - - - - - - -    - - - - - -

		created by MUhammad Abba Gana

		Do NOT copy and paste this code from a web browser "View Source" Window.

		The actual code contains server-side function calls which do not appear in a
		"View Source" situation even copy cannot work!!

		Please refer to the supplied templates on the product CD.
		
			for more contact me on the following details;

			email address: abbagana79@gmail.com
			phone number: +2349039016969
			website:www.Guidetricks.blogspot.com

		*******************************************************************************
	-->
<body>
<center>
<div class="form-group">
	<th class="nav" align="center"><img src="@@cht/images/logo.jpg" width="250" height="200"></th>
	<strong><marquee behavior="alternate">WELCOME TO COMPUTER SCIENCE DEPARTMENT F.C.E - YOLA CHAT SITE</marquee></span></font></div></strong>
<?php
	require('db.php');
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
        $username = $_POST['username'];
        $pss = $_POST['pss'];
		$username = stripslashes($username);
		$username = mysql_real_escape_string($username);
		$pss = stripslashes($pss);
		$pss = mysql_real_escape_string($pss);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username' and pss='$pss'";
		$result = mysql_query($query) or die(mysql_error());
		$rows = mysql_num_rows($result);
        if($rows==1){
			$_SESSION['username'] = $username;
			header("Location: choose.php"); // Redirect user to index.php
            }else{
				echo "<div class='form'><h3>Username or password is incorrect.</h3><br/>Click here to <a href='index.php'>Login</a></div>";
				}
    }else{
?>
<div class="form">
<h1>Log In</h1>
<form action="" method="post" name="login">
<input type="number" name="username" placeholder="registration number" required />
<input type="pss" name="pss" placeholder="Password" required />
<input name="submit" type="submit" value="Login" />
</form>
<p>Not registered yet? <a href='registration.php'>Register Here</a></p>
<p align="right">Forgot Password? Click <a href="#" onClick="MyWindow=window.open('pwordrecover.php','MyWindow','toolbar=no,location=no,directories=yes,status=yes,menubar=yes,scrollbars=yes,resizable=yes,width=300,height=250'); return false;">Here</a></span></p>
</div>
<?php } ?>
</body>
<br><br><br><br>
<p>Programmed and Designed by: <a><strong><a href="http://guidetricks.blogspot.com">Muhammad Abba Gana </strong></p>
</html>
