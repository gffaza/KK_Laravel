<?php
	include "koneksi.php";

	//mengambil data dari db
	$query = mysqli_query($koneksi, "SELECT * FROM cerita ORDER BY id_cerita DESC");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Profil</title>
	<!-- Meta Tag -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, intial-scale=1, shrink-to-fit= no">

	<!-- Javacsript -->
	<script type="text/javascript" src="css/bootstrap/javaScript.js"></script>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet"  href="css/bootstrap/bootstrap.css">

	<!-- CSS Tag -->
	<link rel="stylesheet" type="text/css" href="css/styleprofile.css">

	 <!-- Link Font Roboto -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <!-- Link Font Roboto Mono -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">

</head>
<body>
	<!-- Header -->
	<nav class="navbar navbar-light " >
  	<a class="navbar-brand" href="#" id="teks">
   		<img src="src/images/5.png" width="50" height="50" class="d-inline-block align-top" alt="" loading="lazy">
   		<span style="color: #FBE99E; font-size: 18px; font-weight: bold; margin-top: 10px;">Kepoin Kampus</span></a>
  	<form class="form-inline" style="padding-right: 10%;">
    	<a class="navbar-brand" id="teks">Universitas</a>
    	<a class="navbar-brand" id="teks">Artikel</a>
    	<button>  Keluar  </button>
  	</form>
	</nav>

	<!-- Kolom kiri -->
	<div class="kolomKiri">
		<div>
			<img src="src/images/user.png" class="gambarProfil">
			<p id="teks" style="color: #000000">Koecheng</p>
			<p id="teks" style="margin-bottom: 50px; color: #000000;">Koecheng@gmail.com</p>
			<hr>
			<a class="nav" href="buat_cerita.html" >Buat Cerita</a>
			<a class="nav" href= >Favorite</a>
			<a class="nav" href= >Profile</a>
		</div>
	</div>

	<!-- Kolom Kanan -->
	<div class="kolomKanan">
		<h2 style="margin-top: -25px; font-weight: bold;">Daftar Ceritaku</h2>

		<!-- Cerita 1 -->
		<?php while ($result = mysqli_fetch_array($query)) { ?>
		<div class="card mb-3" style="max-width: 540px;">
		  <div class="row no-gutters">

		  	<!-- Gambar -->
		    <div class="col-md-4">
		    	<?php echo "<img src='src/thumbnail/$result[foto]' class='card-img' height='100%' />";?>
		    </div>

		    <!-- Judul -->
		    <div class="col-md-8">
		      <div class="card-body">
		        <h5 class="card-title"><?php echo $result['judul_cerita'] ?> </h5>
		        <p class="card-text"><small class="text-muted"><?php echo $result['tanggal'] ?></small></p>

		    	<!-- Link lihat cerita -->
		        <a style="float: right; background-color: #FBE99E" href="Artikel.php?id_cerita=<?=$result['id_cerita']?>">Baca Sekarang</a>
		      </div>
		    </div>
		  </div>
		</div>
		<?php } ?>
	</div>
		
</nav>
</body>
</html>


