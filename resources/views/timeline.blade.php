<?php
	include "koneksi.php";

	//mengambil data dari db
	// $query = mysqli_query($koneksi, "SELECT * FROM cerita ORDER BY id_cerita DESC");
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
	<link rel="stylesheet" type="text/css" href="css/styletimeline.css">

	 <!-- Link Font Roboto -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <!-- Link Font Roboto Mono -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">

</head>
<body>
	<!-- Header -->
	<nav class="navbar navbar-light fixed-top " >
  	<a class="navbar-brand" href="#" id="teks">
   		<img src="src/images/blue-icon.png" height="44" class="d-inline-block align-top" alt="" loading="lazy">
  	<form class="form-inline">
    	<a class="navbar-text" href="#" id="teks-nav">Universitas</a>
    	<a class="navbar-text" href="#" id="teks-nav">Artikel</a>
    	<button>  Keluar  </button>
  	</form>
	</nav>
	<!-- /Header-->

	<!-- Konten-->
	<div class="konten">
		<div class="highlight">
			<div class="pmry-high">
				<img src="src/images/Kampus-ITB.jpeg" width="500">
				<h2><span style="font-weight: bold;"> Temukan Cerita Menarik Sekarang!</span></h2>
				<p>--date--</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enimad minim ...</p>
			</div>
			<div class="scn-high">	
				<img src="src/images/Kampus-UI.jpeg" width="200" id="img">
				<h5>Temukan Cerita Menarik Sekarang!</h5>
				<p>--date--</p>		
			</div>
			<div class="scn-high">	
				<img src="src/images/Kampus-UI.jpeg" width="200" id="img">
				<h5>Temukan Cerita Menarik Sekarang!</h5>	
				<p>--date--</p>
			</div>
			<div class="scn-high">	
				<img src="src/images/Kampus-UI.jpeg" width="200" id="img">
				<h5>Temukan Cerita Menarik Sekarang!</h5>		
				<p>--date--</p>
			</div>
		</div>

		<div class="scn-line" >
			<p> --- </p>
			<hr >
			<div class="scn-left">
				<div class="topik">
					<h4><span style="font-weight: bold;">Topik</span></h4>
					<br>
					<div class="row justify-content-md-center">
					    <div class="col col-lg-2">
					      Komedi
					    </div>
					    <div class="col-md-auto">
					      Horror
					    </div>
					    <div class="col col-lg-2">
					      Romantis
					    </div>
				  	</div>
				  	<div class="row justify-content-md-center">
					    <div class="col col-lg-2">
					      Komedi
					    </div>
					    <div class="col-md-auto">
					      Horror
					    </div>
					    <div class="col col-lg-2">
					      Romantis
					    </div>
				  	</div>
				  	<div class="row justify-content-md-center">
					    <div class="col col-lg-2">
					      Komedi
					    </div>
					    <div class="col-md-auto">
					      Horror
					    </div>
					    <div class="col col-lg-2">
					      Romantis
					    </div>
				  	</div>
				</div>	
			</div>
			<div class="scn-right">
				<h4><span style="font-weight: bold;">Trending</span></h4>
				<div class="row">
				    <div class="col">
				      <img src="src/images/Kampus-UI.jpeg" style="" width="140">
				    </div>
				    <div class="col">
				      <img src="src/images/Kampus-UI.jpeg" style="" width="140">
				    </div>
				    <div class="col">
				      <img src="src/images/Kampus-UI.jpeg" style="" width="140">
				    </div>
				</div>
				<div class="row">
				    <div class="col">
				      <img src="src/images/Kampus-UI.jpeg" style="" width="140">
				    </div>
				    <div class="col">
				      <img src="src/images/Kampus-UI.jpeg" style="" width="140">
				    </div>
				    <div class="col">
				      <img src="src/images/Kampus-UI.jpeg" style="" width="140">
				    </div>
				</div>
			</div>
		</div>

		<div class="latest">
			<br><br><br><hr>
			<h4><span style="font-weight: bold">Terbaru</span></h4>
			<div class="lst-post">
			<img src="src/images/Kampus-UI.jpeg" style="" width="400">
			<br><br>
			<div class="teks">
				<h5 style="text-align: left; font-weight: bold">Temukan Cerita Menarik Sekarang!</h5>
				<p>--date--</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
			
			</div>
			<div class="lst-post">
			<img src="src/images/Kampus-UI.jpeg" style="" width="400">
			<br><br>
			<div class="teks">
				<h5 style="text-align: left; font-weight: bold">Temukan Cerita Menarik Sekarang!</h5>
				<p>--date--</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
			</div>
			<div class="lst-post">
			<img src="src/images/Kampus-UI.jpeg" style="" width="400">
			<br><br>
			<div class="teks">
				<h5 style="text-align: left; font-weight: bold">Temukan Cerita Menarik Sekarang!</h5>
				<p>--date--</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
			</div>			
		</div>
	</div>
	
	<div class="footer">
	<p>  kotak</p>		
	</div>

</nav>
</body>
</html>


