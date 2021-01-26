<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/stylehome.css">
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
            <img src="src/images/5.png" width="35" height="35" class="d-inline-block align-top" alt="" loading="lazy">
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
        <a class="nav-link js-scroll-trigger" href="login"><span class="nav-opt">Login</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link js-scroll-trigger" href="registrasi"><span class="nav-reg">Join Now</span></a>
      </li>
    </ul>
    </div>
  </div>
</nav>
      
    <div class="jumbotron">
          <h4 style=""> Cari Cerita Menarik Dari Sebuah Perjuangan</h4>
          <br>
      <div class="container">
        <div class="row">
          <div class="col-8">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img href="Mountain.html"src="src/images/Kampus-UII.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="src/images/Kampus-UI.jpeg" class="d-block w-100" alt="...">
                     <div class="carousel-caption d-none d-md-block">
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="src/images/Kampus-ITB.jpeg" class="d-block w-100" alt="...">
                     <div class="carousel-caption d-none d-md-block">
                    </div>
                  </div>  
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
          </div>
        </div>
      </div>
      <img src="src/images/Ilustrasi1.png" width="200" style="float: right; margin-top: -125px; margin-right: 100px">
        <div class="searching">
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Apa Yang Menarik?" aria-label="Search">
            <button id="search" class="btn btn-outline-warning my-2 my-sm-0" type="submit" style="">Search</button>
          </form>
        </div>
    </div>

      <br><br><br>

      <div class="card bg-transparent mb-3" style="max-width: 640px;">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="src/images/Ilustrasi2.png" class="card-img" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h3 class="card-title" style="font-weight: bold;">Temukan Cerita Menarik Sekarang!</h3>
              <p class="card-text">Lorem ipsum dolor sit amet,consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore </p>
              <button type="button" class="btn btn-light" id="btn_hmpage" style="border-color: blue">Artikel</button>
            </div>
          </div>
        </div>
      </div>

      <div class="card bg-transparent mb-3" style="max-width: 640px;">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="src/images/Ilustrasi3.png" class="card-img" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h3 class="card-title" style="font-weight: bold;">Cari Kisah Unik di Setiap Kampus</h3>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
              <button type="button" class="btn btn-light" id="btn_hmpage">Universitas</button>
            </div>
          </div>
        </div>
      </div>

      <div class="footer">
        <div class="ft-konten">
        </div>
      </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>