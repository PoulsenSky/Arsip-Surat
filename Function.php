<?php 
//Connection ke database
$Connection = mysqli_connect("localhost","root","","db_buku") or die("Connection is lose....");

function query($query){
	global $Connection;
	$result=mysqli_query($Connection,$query);
	$rows=[];
	while($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	return $rows;
}

function Register($data) {
	global $Connection;
	$username = strtolower(stripcslashes($data["username"]));
	$password = mysqli_real_escape_string($Connection, $data["password"]);
	$password2 = mysqli_real_escape_string($Connection, $data["password2"]);
	
	$result = mysqli_query($Connection, "SELECT * FROM tb_account WHERE username = '$username'");
	if(mysqli_fetch_assoc($result)) {
		print "<script> alert('The username has been available, find the other one!')</script>";
		return false;
	}
	
	if($password !== $password2) {
		print"<script> alert('Password is not suited!')</script>";
		return false;
	}
	
	$password = password_hash($password, PASSWORD_DEFAULT);
	
	mysqli_query($Connection, "INSERT INTO tb_account VALUES (' ','$username','$password')");
	return mysqli_affected_rows($Connection);
}

function Adding($data){
	global $Connection;

	$id_buku = htmlspecialchars($data["id_buku"]);
	$judul_buku = htmlspecialchars($data["judul_buku"]);
	$penulis = htmlspecialchars($data["penulis"]);
	$penerbit = htmlspecialchars($data["penerbit"]);
	$kategori_array = $data["kategori"];
	$kategori = implode(", ",$kategori_array);
	$resensi = htmlspecialchars($data["resensi"]);

	$Adding = "INSERT INTO tb_bukubaru (id_buku,judul_buku,penulis,penerbit,kategori,resensi) VALUES 
	('$id_buku','$judul_buku','$penulis','$penerbit','$kategori','$resensi')";
	$sql = mysqli_query($Connection,$Adding);
	return mysqli_affected_rows($Connection);

}
function Deleting($id){
	global $Connection;
	mysqli_query($Connection,"DELETE FROM tb_bukubaru where id_buku = $id");
	return mysqli_affected_rows($Connection);
}

function Edit($data){
	global $Connection; 

	$id_buku = htmlspecialchars($data["id_buku"]);
	$judul_buku = htmlspecialchars($data["judul_buku"]);
	$penulis = htmlspecialchars($data["penulis"]);
	$penerbit = htmlspecialchars($data["penerbit"]);
	$kategori_array = $data["kategori"];
	$kategori = implode(", ",$kategori_array);
	$resensi = htmlspecialchars($data["resensi"]);

		$update = "UPDATE tb_bukubaru SET 	id_buku = '$id_buku',
											judul_buku =' $judul_buku',
											penulis = '$penulis',
											penerbit = '$penerbit',
											kategori ='$kategori',
											resensi='$resensi' 
					WHERE id_buku ='$id_buku'";
			
	$sql=mysqli_query($Connection,$update);
	return mysqli_affected_rows($Connection);

}


function Search($Search){
	$query="SELECT * FROM tb_bukubaru WHERE judul_buku like '%$Search%'";
	return query($query);
}

?>