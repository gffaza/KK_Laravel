<?php
	include "koneksi.php";

	//mengambil data dari db
	// $query = mysqli_query($koneksi, "SELECT * FROM cerita ORDER BY id_cerita DESC");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Kampus</title>
	<!-- Meta Tag -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, intial-scale=1, shrink-to-fit= no">

	<!-- Javacsript -->
	<script type="text/javascript" src="css/bootstrap/javaScript.js"></script>

	<!-- Bootstrap CSS --><!-- 
	<link rel="stylesheet"  href="css/bootstrap/bootstrap.css"> -->

	<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

	<!-- CSS Tag -->
	<link rel="stylesheet" type="text/css" href="css/stylekampus.css">

	 <!-- Link Font Roboto -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <!-- Link Font Roboto Mono -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">

</head>
<body>
	<!-- Header -->
	<nav class="navbar navbar-light fixed-top" >
  	<a class="navbar-brand" href="#" id="teks">
   		<img src="src/images/blue-icon.png" height="44" class="d-inline-block align-top" alt="" loading="lazy">
  	<form class="form-inline">
    	<a class="navbar-text" href="#" id="teks-nav">Universitas</a>
    	<a class="navbar-text" href="#" id="teks-nav">Artikel</a>
    	<button>  Keluar  </button>
  	</form>
	</nav>
	<!-- /Header-->

	<!-- Konten -->
	<section class="konten">
			<div class="card mb-3" id="card-header"  style="max-width: 1000px;">
			  <div class="row g-0">
			    <div class="col-md-7">
			      <img src="/src/images/Kampus.png" class="card-header-img" alt="...">
			    </div>
			    <div class="col-md-5">
			      <div class="card-body">
			        <h3 class="card-title-header">Cari Kisah Unik di Setiap Kampus</h3>
			      </div>
			    </div>
			  </div>
			</div>

		<div class="filter">
			<div class="btn-group">
			  <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
			    PTN/PTS
			  </button>
			  <ul class="dropdown-menu">
			    <li><a class="dropdown-item" href="#">Action</a></li>
			    <li><a class="dropdown-item" href="#">Another action</a></li>
			    <li><a class="dropdown-item" href="#">Something else here</a></li>
			  </ul>
			</div>
			<div class="btn-group">
			  <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
			    Daerah
			  </button>
			  <ul class="dropdown-menu">
			    <li><a class="dropdown-item" href="#">Action</a></li>
			    <li><a class="dropdown-item" href="#">Another action</a></li>
			    <li><a class="dropdown-item" href="#">Something else here</a></li>
			  </ul>
			</div>
			<form class="d-flex">
		        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
		        <button class="btn btn-outline-success" type="submit">Search</button>
	      	</form>

		</div>
		<div class="kampus">
			<div class="row row-cols-1 row-cols-md-3 g-4">
			  <div class="col">
			    <div class="card h-100">
			      <img src="/src/kampus/logo-uii.png" class="card-img-top" alt="...">
			      <div class="card-body">
			        <h5 class="card-title">Universitas Islam Indonesia</h5>
			        <p class="card-text">Yogyakarta</p>
			      </div>
			    </div>
			  </div>
			  <div class="col">
			    <div class="card h-100">
			      <img src="/src/kampus/logo-ui.png" class="card-img-top" alt="...">
			      <div class="card-body">
			        <h5 class="card-title">Universitas Indonesia</h5>
			        <p class="card-text">Depok</p>
			      </div>
			    </div>
			  </div>
			  <div class="col">
			    <div class="card h-100">
			      <img src="/src/kampus/logo-itb.png" class="card-img-top" alt="...">
			      <div class="card-body">
			        <h5 class="card-title">Institut Teknologi Bandung</h5>
			        <p class="card-text">Bandung</p>
			      </div>
			    </div>
			  </div>
			  <div class="col">
			    <div class="card h-100">
			      <img src="/src/kampus/logo-amikom.png" class="card-img-top" alt="...">
			      <div class="card-body">
			        <h5 class="card-title">Universitas Amikom</h5>
			        <p class="card-text">Yogyakarta</p>
			      </div>
			    </div>
			  </div>
			  <div class="col">
			    <div class="card h-100">
			      <img src="/src/kampus/logo-undip.png" class="card-img-top" alt="...">
			      <div class="card-body">
			        <h5 class="card-title">Universitas Diponegoro</h5>
			        <p class="card-text">Semarang</p>
			      </div>
			    </div>
			  </div>
			  <div class="col">
			    <div class="card h-100">
			      <img src="/src/kampus/logo-telkom.png" class="card-img-top" alt="...">
			      <div class="card-body">
			        <h5 class="card-title">Universitas Telkom</h5>
			        <p class="card-text">Bandung</p>
			      </div>
			    </div>
			  </div>
			   <div class="col">
			    <div class="card h-100">
			      <img src="/src/kampus/logo-ugm.png" class="card-img-top" alt="...">
			      <div class="card-body">
			        <h5 class="card-title">Universitas Gadjah Mada</h5>
			        <p class="card-text">Yogyakarta</p>
			      </div>
			    </div>
			  </div>
			   <div class="col">
			    <div class="card h-100">
			      <img src="/src/kampus/logo-its.png" class="card-img-top" alt="...">
			      <div class="card-body">
			        <h5 class="card-title">Universitas Sepuluh November</h5>
			        <p class="card-text">Surabaya</p>
			      </div>
			    </div>
			  </div>
			   <div class="col">
			    <div class="card h-100">			    	
			      <img src="/src/kampus/logo-unpad.png" class="card-img-top" alt="...">
			      <div class="card-body">
			        <h5 class="card-title">Universitas Padjajaran</h5>
			        <p class="card-text">Bandung</p>
			      </div>
			    </div>
			  </div>
			</div>
		</div>
	</section>