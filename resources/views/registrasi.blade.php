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
	<link rel="stylesheet"  href="css/bootstrap/bootstrap.css">

	<!-- Link Font Roboto -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <!-- Link Font Roboto Mono -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">

	<!-- CSS Tag -->
	<link rel="stylesheet" type="text/css" href="css/styleregis.css">
</head>
<body>
	<!-- Header -->

	<nav class="navbar navbar-light " >
  	<a class="navbar-brand" href="#" id="teks">
   		<img src="src/images/white-icon.png" height="44" class="d-inline-block align-top" alt="" loading="lazy">
  	<form class="form-inline">
    	<a class="navbar-text" href="#" id="teks-nav">Universitas</a>
    	<a class="navbar-text" href="#" id="teks-nav">Artikel</a>
    	<button>  Keluar  </button>
  	</form>
	</nav>
	<!-- <div class="logo">
   		<img src="src/images/4.png" width="70" height="70" class="d-inline-block align-top" alt="" loading="lazy" style="margin-top: -10px;">
   			<span style="font-family: Roboto; font-size: 30px; font-weight: bold; color:#1F3C88">Kepoin Kampus</span> 
   		</a>
	</div> -->
	<div class="konten">
		<div>
		<img src="src/images/ilustrasi.png" width="400" height="400" style="float: right; margin-right: 150px; margin-top: 50px">
	</div>

	<!-- Form -->
	<div id="form">
		<form method="POST" action="/registrasi" enctype="multipart/form-data">
			{{csrf_field()}}
			<p><span style="opacity: 0%">y</span></p>
			<h2 style="">Daftar</h2>
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
					<td><input type="radio" name="status" id="rd-btn" value="laki-laki"><span id="radio">Mahasiswa</span></td>
					<td><input type="radio" name="status" id="rd-btn" value="perempuan"><span id="radio">Alumni</span></td>
				</tr>
				<tr>
					<td><input type="text" name="instansi" id="instansi" placeholder="instansi" class="isi-form" required></td>
					<td><input type="file" name="foto" class="isi-form" style="margin-left: 20px" value="KTM" required /></input></td>
				</tr>
				<tr></tr>
				<tr>
					<td><button class="isi-form" style="padding-right: 50px; padding-left: 50px; color: #F6F5F5; background-color: #1F3C88" name="daftar" onclick="validasi">Daftar</button></td>
				</tr>
			</table>
		</form>	
	</div>
	</div>
	
</body>
</html>