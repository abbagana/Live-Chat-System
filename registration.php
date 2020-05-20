<?php
/*
Author: muhammad Abba Gana
Website: www.guidetricks.blogspot.com
*/
?>
<!DOCTYPE html>
<html>
<head>
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
<meta charset="utf-8">
<title>Registration Form</title>
<link rel="stylesheet" href="css/login.css" />
</head>
<body>
<center>
<div class="form-group">
	<th class="nav" align="center"><img src="@@cht/images/logo.jpg" width="250" height="200"></th>
	<strong><marquee behavior="alternate">WELCOME TO COMPUTER SCIENCE DEPARTMENT F.C.E - YOLA CHAT REGISTRATION SITE</marquee></span></font></div></strong>
<?php
	require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
	
        $username = $_POST['username'];
		$fullname = $_POST['fullname'];
		$Department = $_POST['Department'];
		$pss = $_POST['pss'];
		$question = $_POST['question'];
		$answer = $_POST['answer'];
		$username = stripslashes($username);
		$username = mysql_real_escape_string($username);
		$fullname = stripslashes($fullname);
		$fullname = mysql_real_escape_string($fullname);
		$trn_date = date("Y-m-d H:i:s");
		$Department = stripslashes($Department);
		$Department = mysql_real_escape_string($Department);
		$pss = stripslashes($pss);
		$pss = mysql_real_escape_string($pss);
		$question = stripslashes($question);
		$question = mysql_real_escape_string($question);
		$answer = stripslashes($answer);
		$answer = mysql_real_escape_string($answer);
        $query = "INSERT into `users` (username, fullname, trn_date, Department, pss, question, answer) VALUES ('$username', '$fullname', '$trn_date', '$Department', '$pss', '$question', '$answer')"; 
        $result = mysql_query($query);
        if($result){
            echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='index.php'>Login</a></div>";
        }
    }else{
?>
<div class="form">
<h1>Registration Form</h1>
<form name="registration" action="" method="post">
<input type="number" name="username" placeholder="Registration Number" required />
<input type="fullname" name="fullname" placeholder="full name" required />
<select name="Department" required>
		<option>----------Chosse your Department--------</option>
        <option>Computer/Intergerated Science</option>
        <option>Physics/Computer</option>
        <option>Biology/Computer</option>
        <option>Maths/Computer</option>
        <option>Chemistry/Computer</option>
        <option>Others</option>      
    </select>
	<input type="pss" name="pss" placeholder="Password" required />
	<select name="question" arequired>
		<option>----------Chosse Any Question--------</option>
        <option>what is your favorite color</option>
		<option>what is your favorite movie</option>
		<option>what is your favorite singer</option>
		<option>what is your favorite pet</option>
		<option>what is your favorite cartoon character</option>
		<option>what is your Best Boy/Girl Friend</option>
		<option>what is your nickname</option>
		<option>what is your First Teachers Name</option>
	<input type="answer" name="answer" placeholder="answer" required />
<input type="submit" name="submit" value="Register" />
</form>
</div>
<?php } ?>
</body>
<br><br><br><br>
<p>Programmed and Designed by: <a><strong><a href="http://guidetricks.blogspot.com">Muhammad Abba Gana </strong></p>
</html>