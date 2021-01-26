<?php
    if(isset($_GET['id_cerita'])){
        $id_cerita = $_GET['id_cerita'];
    }
    else {
        die ("Error. No ID Selected!");    
    }
    include "koneksi.php";
    $query = mysqli_query($koneksi, "SELECT * FROM cerita WHERE id_cerita = '$id_cerita'");
    $result = mysqli_fetch_array($query);
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/konten-artikel.css">
    <!-- Link Font Roboto -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <!-- Link Font Roboto Mono -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">

    <title>Kepoin Kampus</title>
  </head>
  <body>
      <nav class="navbar navbar-expand-lg navbar-dark" id=mainNav>
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="src/images/4.png" width="35" height="35" class="d-inline-block align-top" alt="" loading="lazy">
            <span class="nav_logo">Kepoin Kampus</span>
          </a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        <div class="collapse navbar-collapse" id="navbarNav">

    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link js-scroll-trigger" href="profile.html"><span class="nav-opt">Artikel</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link js-scroll-trigger" href="profile.html"><span class="nav-opt">Universitas</span></a>
      </li>
      <li>
        <a class="nav-link js-scroll-trigger" ><span class="nav-opt">|</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link js-scroll-trigger" href="form.html"><span class="nav-reg">Log Out</span></a>
      </li>
    </ul>
    </div>
  </div>
</nav> 
      
      <div class="judul-artikel">
        <div class="judul">
          <h1><span style="font-weight: bold; margin: 18%;"> <?php echo $result['judul_cerita'] ?> </span></h1>
        </div>
      </div>
      
        <div class="garis">
        </div>

        <div class="logo-kampus"> 
          <!-- <?php //echo "<img src='src/thumbnail/$result[foto]' style='max-width: 300px;' />";?> -->
          <img src="src/images/logo-uii.png">
        </div>

      <div class="topik">
        <a href="#"><span class="topik-artikel" style="margin-left: 5px;margin-right: 5px"> <?php echo $result['topik'] ?> </span></a>
      </div>

      <!-- isi konten -->
      <div class="isi-konten">
        <p>
         <?php echo $result['isi_cerita'] ?>
        </p>
        
      </div>

      <br>

      <div class="footer">
        <div class="ft-konten">
        </div>
      </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>