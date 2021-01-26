<?php
	require 'koneksi.php';
	require 'regis.php';

	if(isset($_POST["daftar"])){

		if(registrasi($_POST) > 0){
		}
		else{
			echo mysqli_error($koneksi);
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registrasi</title>
	<!-- Meta Tag -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, intial-scale=1, shrink-to-fit= no">

	<!-- Javacsript -->
	<script type="text/javascript" src="javaScript.js"></script>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet"  href="css/bootstrap.css">

	<!-- Link Font Roboto -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <!-- Link Font Roboto Mono -	->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">

	!-- CSS Tag -->
	<link rel="stylesheet" type="text/css" href="css/styleregis.css">
</head>
<body>
	<!-- Header -->
	<div class="logo">
   		<img src="src/images/4.png" width="70" height="70" class="d-inline-block align-top" alt="" loading="lazy" style="margin-top: -10px;">
   			<span style="font-family: Roboto; font-size: 30px; font-weight: bold; color:#1F3C88">Kepoin Kampus</span> 
   		</a>
	</div>

	<div>
		<img src="src/images/ilustrasi.png" width="450" height="450" style="float: right; margin-right: 150px; margin-top: 50px">
	</div>

	<!-- Form -->
	<div id="form">
		<form method="POST" action="" enctype="multipart/form-data" onsubmit="return validasi()">
			<p><span style="opacity: 0%">y</span></p>
			<h2 style="font-weight: bold; color: #F6F5F5; margin-top: 10; margin-left: 10%; margin-top: 10px">Daftar</h2>
			<table >
				<tr>
					<td><input type="text" name="username" id="username" placeholder="Username" class="isi-form" required></td>
				</tr>
				<tr>
					<td><input type="email" name="email" id="email" placeholder="Email" class="isi-form" required></td>
				</tr>
				<tr>
					<td><input type="Password" name="password" id="pass" placeholder="Password" class="isi-form" required></td>
				</tr>
				<tr>
					<td><input type="Password" name="confirmpass" id="passc" placeholder="Konfirmasi Password" class="isi-form" required></td>
				</tr>
				<tr>
					<td><input type="radio" name="status" value="laki-laki"><span style="font-weight: bold; color:#F6F5F5; font-family: Roboto Mono; margin-left: 10px" >Mahasiswa</span></td>
					<td><input type="radio" name="status" value="perempuan"><span style="font-weight: bold; color:#F6F5F5; font-family: Roboto Mono; margin-left: 10px" > Alumni </span></td>
				</tr>
				<tr>
					<td><input type="text" name="instansi" id="instasi" placeholder="instansi" class="isi-form" required></td>
					<td><input type="file" name="foto" class="isi-form" style="margin-left: 20px" value="KTM" required /></input></td>
				</tr>
				<tr></tr>
				<tr>
					<td><button class="isi-form" style="padding-right: 50px; padding-left: 50px; color: #F6F5F5; background-color: #1F3C88" name="daftar" onclick="validasi">Daftar</button></td>
				</tr>
			</table>
		</form>	
	</div>
</body>
</html>