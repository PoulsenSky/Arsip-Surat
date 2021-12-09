<?php
	
	SESSION_START();
	require 'Function.php';
	
	if(!isset($_SESSION["Login"])) {
		header("Location:Login.php");
		exit;
	}
	$Buku = query("SELECT * FROM tb_bukubaru");
	
	if(isset($_POST['submit'])) {
		$Buku = Search($_POST['Search']);
	}
?>

<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<title> Main menu Book Data </title>
	</head>
	
	<body>
		<center>
		<h1 style="font-family:Azonix"> Daftar Buku </h1>
				<p>
					<a href="index.php"> Home </a> | 
					<a href="Adding.php"> Add some books! </a> |
					<a href="Register.php"> Register Here! </a> |
					<a href="Logout.php"> Logout </a>
					</p>
				<form action="" method="POST">
				<input type="text" name="Search" placeholder="Input the key" autofocus>
				<button name="submit"> Search </button>
		</form>
	<p></p>
	
			<table border="1" cellspacing="2" cellpadding="10" width="1000">
		<tr>
			<th> ID Buku </th>
			<th> Judul Buku </th>
			<th> Penulis </th>
			<th> Penerbit </th>
			<th> Kategori </th>
			<th> Resensi </th>
			<th> Keterangan </th>
		</tr>
		
		<?php
			foreach ($Buku as $B) { ?>
				<tr>
					<td> <?= $B["id_buku"]?> </td>
					<td> <?= $B["judul_buku"]?> </td>
					<td> <?= $B["penulis"]?> </td>
					<td> <?= $B["penerbit"]?> </td>
					<td> <?= $B["kategori"]?> </td>
					<td> <?= $B["resensi"]?> </td>
					<td><a href="Deleting.php?id=<?= $B["id_buku"]?>" onclick="
								return confirm('This file will be deleted. Continue?');"> HAPUS </a>| 
						<a href="Edit.php?id=<?= $B["id_buku"] ?>"> EDIT </a>
						</td>
				</tr>
		<?php } ?>
		</table>
		<br> <br>
		<h3> <center> Created by: Putera Fradhana Caeshandra (09021281924085) </h3>
	</body>
</html>