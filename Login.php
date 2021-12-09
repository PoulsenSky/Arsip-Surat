<?php

	SESSION_START();
	require 'Function.php';
	if(isset($_POST['Login'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$result = mysqli_query($Connection, "SELECT * FROM tb_account WHERE username = '$username'");
		
		if(mysqli_num_rows($result)===1) {
			$row = mysqli_fetch_assoc($result);
			if(password_verify($password, $row['password'])) {
				
				$_SESSION["Login"] = true;
				echo "<script> alert('Welcome to the Book List!')</script>";
				header("Location:index.php");
			exit;

			}
		}
		$error = true;
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
	<?php
		if(isset($error)) { ?>
		<table border="1" cellpadding="4" cellspacing="1">
			<tr> <th>
			<h2 style="color:red;"> <center> Username/Password isn't correct! <br> Try Again! </center> </h2>
			</th> </tr>
		<table> <br> <br>
	<?php	}	?>
		<table border="1" cellpadding="4" cellspacing="1">
		<tr> <th colspan="3" style="Text-align:center"> <h4 style="Text:bold"> Register Now! </h4> </th> </tr>
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
		
<tr>	<td colspan="3">
                <center> <button type="submit" name="Login"> Login </button> </center>
        </td> </tr>
		
<tr>	<td colspan="3">
                <center> <h4> Already have an account? Register <a href="Register.php"> Here! </a> </h4> </center>
        </td> </tr>
		
		</form>
		</center>
	</body>
</html>