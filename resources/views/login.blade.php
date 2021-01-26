<?php

  Require 'koneksi.php';

  if(isset($_POST['login'])){
    //mengambil nilai variabel
    $username = $_POST["username"];
    $password = $_POST["password"];

    //mengecek username
    $result = mysqli_query($koneksi, "SELECT * FROM penulis WHERE username = '$username'");

    if(mysqli_num_rows($result) === 1 ){
        //cek password
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["pass"])) {
          header("Location: profil.php");
          exit;
        }
    }

  $error = true;  

  }

?>

<!doctype html> 
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
    <title>Login</title>
    <!-- CSS Tag -->
   <link rel="stylesheet" type="text/css" href="css/stylelogin.css">

  </head>
  <body>

  <nav class="navbar navbar-light" >
    <a class="navbar-brand" href="#" id="teks">
      <img src="src/images/yellow-icon.png" height="44" class="d-inline-block align-top" alt="" loading="lazy">
    <form class="form-inline">
      <a class="navbar-text" href="#" id="teks-nav">Universitas</a>
      <a class="navbar-text" href="#" id="teks-nav">Artikel</a>
      <button>  Keluar  </button>
    </form>
  </nav>
  
  <div class="konten">
       <img src="src/images/Group 48.png" width="400" height="400" id="gmbr">
     <div class="container">

      <!-- form login -->
      <div id="form">
        <form method="post" action="">
          <p><span style="opacity: 0%">y</span></p>
          <h2 style="">Masuk</h2>
          <table >

            <!-- memberikan pesan kesalahan jika terjadi -->
            <?php if( isset($error)) : ?>
              <p style="color: red; font-style: italic;">Username atau Password Salah</p>
            <?php endif; ?>

            <tr>
              <td></td>
            </tr>
            <tr>
              <td><input type="text" name="username" placeholder="Username" class="isi-form"></td>
            </tr>
            <tr>
              <td><input type="Password" name="password" placeholder="Password" class="isi-form"></td>
            </tr>
            <tr>
              <td><button class="button-form" name="login">login</button></td>
            </tr>
          </table>
        </form> 
      </div>
    </div>
  </div>
  </body>

</html>