<?php
include 'koneksidata.php';
session_start();
include 'session.php';
?>

<!DOCTYPE html>

<html>

<head>
    <title>HolyDude | Homepage</title>
    <link rel="stylesheet" href="style/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="shortcut icon" href="img/ms-icon-310x310.png">
</head>

<body>
        
  <div class="jumbotron">
    <img id="logo" src="img/logo.jpg" class="rounded-circle"> <br>
    <h1 class="display-4">HOLYDUDE STORE</h1>
    <p class="lead">This is official online shop of HolyDude Clothing Brand</p>
    <hr class="my-4">
    <p>Happy Shopping</p>
    <span><a class="btn btn-primary btn-lg" id="shop" href="index.php" role="button"
    target="_blank">Shop Now!</a></span>
    <span><a class="btn btn-primary btn-lg" id="ig" href="https://www.instagram.com/holydamn.id/" role="button"
    target="_blank">Visit Our Instagram</a></span>
  </div>

  
</body>

</html>