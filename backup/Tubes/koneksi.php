<?php
	$nama_server = "localhost";
	$username	= "root";
	$password	= '';
	$dbNames	= "kepoin_kampus";

	$koneksi = mysqli_connect($nama_server, $username, $password, $dbNames);

	//melakukan pengecekan
	if ($koneksi->connect_error) {
			die("Koneksi gagal " .$koneksi->connect_error ."<br>");
		} 
?>