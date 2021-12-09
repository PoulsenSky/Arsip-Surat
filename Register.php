<?php
	require 'Function.php';
	if(isset($_POST["Register"])) {
		if(Register($_POST) > 0) {
			print "<script> alert('You've registered your Account!')</script>";
		} 
			else {
			print mysqli_error($Connection);
		}
	}
?>

<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial=scalee=1.0">
		<title> Register! </title>
	</head>
	
	<body>
	<center>
		<table border="1" cellpadding="4" cellspacing="1">
		<tr> <th colspan="3" style="Text-align:center"> <h3 style="Text:bold"> Register Now! </h3> </th> </tr>
		<form method="POST" action="">
<tr>	<td> Username </td> 
		<td> : </td>
		<td>	<label for="username"> </label>
				<input type="text" id="username" name="username" autocomplete="on" required>
				<br> </td> </tr>			
	
<tr>	<td> Password </td> 
		<td> : </td>  
		<td>	<label for="password"></label>
				<input type="password" id="password" name="password" autocomplete="off">
				<br> </td> </tr>
				
<tr>	<td> Confirm Password </td> 
		<td> : </td>  
		<td>	<label for="password2"></label>
				<input type="password" id="password2" name="password2" autocomplete="off">
				<br> </td> </tr>
				
<tr>	<td colspan="3">
                <center> <button type="submit" name="Register">Kirim</button> </center>
        </td> </tr>
		
<tr>	<td colspan="3">
                <center> <h4> Already have an account? Login <a href="Login.php"> Here! </a> </h4> </center>
        </td> </tr>
		
		</form>
	</body>
</html>