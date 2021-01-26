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
  <link rel="stylesheet"  href="css/bootstrap.css">

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
    <h1 ><img src="src/images/4.png" width="75" height="75"><span style="color:#FBE99E">Kepoin Kampus</span></h1>
    
     <img src="src/images/Group 48.png" width="450" height="450" style="float: right; margin-right: 150px; margin-top: 50px">
     <div class="container">

      <!-- form login -->
  <div id="form">
    <form method="post" action="">
      <p><span style="opacity: 0%">y</span></p>
      <h2 style="font-weight: bold; color: black; margin-top: 10; margin-left: 10%; margin-top: 10px">Daftar</h2>
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
          <td><button class="isi-form" name="login" style="padding-right: 50px; padding-left: 50px; color: #F6F5F5; background-color: #1F3C88">login</button></td>
        </tr>
      </table>
    </form> 
  </div>
  
</div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

  </body>

</html>