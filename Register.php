<?php
	require 'Function.php';
	if(isset($_POST["Register"])) {
		if(Register($_POST) > 0) {
			print "<script> alert('Akun berhasil dibuat!')</script>";
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
		<link rel="stylesheet" href="css/style.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	</head>

	<body class="HelloBG2">
	<?php
		if(isset($error)) {
			alert("An error occurred");
		}	?>
		<div class="card">
		<form class="myform getLeft">
			<h1 class="title"> Daftar Akun </h1>
			<div class="mb-3">
				<label for="exampleInputEmail1" class="form-label">Username</label>
				<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
			</div>
			<div class="mb-3">
				<label for="exampleInputPassword1" class="form-label">Password</label>
				<input type="password" class="form-control" id="password">
			</div>
			<div class="mb-3">
				<label for="exampleInputPassword1" class="form-label">Konfirmasi Password</label>
				<input type="password2" class="form-control" id="password2">
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
		<div class="card2"> 
			<p> Sudah membuat akun? Login segera!
				<button class="btn btn-primary registerme"> <a href="login.php" class="registertext"> Login </a> </button>
			</p>
		</div>







		<div class="colorFooter">
		<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top" style="user-select: auto;">
			<div class="col-md-4 d-flex align-items-center" style="user-select: auto;">
			<a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1" style="user-select: auto;">
				<svg class="bi" width="30" height="24" style="user-select: auto;"><use xlink:href="#bootstrap" style="user-select: auto;"></use></svg>
			</a>
			<span class="text-muted" style="user-select: auto;">
			<img src="https://upload.wikimedia.org/wikipedia/commons/b/bc/%28Bukit_Asam%29_Logo_CMYK-01.png" class="logoImg"> Copyright, PT Bukit Asam | All rights reserved</span>
			</div>
			<ul class="nav col-md-4 justify-content-end list-unstyled d-flex" style="user-select: auto;">
			<li class="ms-3" style="user-select: auto;"><a class="text-muted" href="#" style="user-select: auto;"><svg class="bi" width="24" height="24" style="user-select: auto;"><use xlink:href="#twitter" style="user-select: auto;"></use></svg></a></li>
			<li class="ms-3" style="user-select: auto;"><a class="text-muted" href="#" style="user-select: auto;"><svg class="bi" width="24" height="24" style="user-select: auto;"><use xlink:href="#instagram" style="user-select: auto;"></use></svg></a></li>
			<li class="ms-3" style="user-select: auto;"><a class="text-muted" href="#" style="user-select: auto;"><svg class="bi" width="24" height="24" style="user-select: auto;"><use xlink:href="#facebook" style="user-select: auto;"></use></svg></a></li>
			</ul>
		</footer> </div>





		<!-- SCRIPT ONLY -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>
