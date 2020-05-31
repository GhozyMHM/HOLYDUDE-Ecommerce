<?php
include 'koneksidata.php';
session_start();
include 'session.php';
?>

<!DOCTYPE html>

<html>

<head>
    <title>HolyDude | About Us</title>
    <link rel="stylesheet" href="style/info.css">
    <link rel="stylesheet" href="style/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="style/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="style/nice-select.css" type="text/css">
    <link rel="stylesheet" href="style/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="style/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="style/slicknav.min.css" type="text/css">
    <link rel="shortcut icon" href="ms-icon-310x310.png">
    <script src="https://kit.fontawesome.com/9fb210ee5d.js" crossorigin="anonymous"></script>
</head>

<body>

<div class="wrap" id="info">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#"><img id="h" src="img/hhh.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
              
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="info.php">Information</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="account.php">Account (<?php echo $_SESSION['username'];?>)</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="about.php">About Us<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="mt-5 mb-5">
        <div class="container">
            <h2 class="text-center" id="faq">About Us</h2>
            <div class="row">
                <div class="col-md-9 mx-auto">
                    <div class="card">
                        <div class="card-body">
                                <h5>HolyDude is a clothing brand which focus on classy appearance from each people through
                                the classy outfit that we produce. And you can order t-shirt with your own design request.</h5>
                                <h5>So, you can customize your t-shirt with your own design in this website.</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<div class="mt-5 mt-n1 pt-5 pb-4 footer bg-dark">
        <div class="container">
            <div class="newslatter-form bg-dark pb-5">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="#">
                            <input type="text" placeholder="Your email address">
                            <button type="submit">Subscribe to our newsletter</button>
                        </form>
                    </div>
                </div>
            </div>
          <div class="row">
            <div class="col-lg-5 col-xs-12 about-company">
              <h2 class="text-white">Information</h2>
              <p class="pr-5 text-white-50">HolyDude is a clothing brand which focus on classy appearance from each people through
                the classy outfit that we produce. And you can order t-shirt with your own design request.
              </p>
              <p><a href="#"><i></i></a><a href="#"><i></i></a></p>
            </div>
            <div class="col-lg-3 col-xs-12 links">
              <h4 class="mt-lg-0 mt-sm-3 text-white">Features</h4>
                <ul class="m-0 p-0 text-white-50">
                  <li>Custom Your T-Shirt</li>
                  <li>Free Shipping</li>
                  <li>Friendly Support</li>
                </ul>
            </div>
            <div class="col-lg-4 col-xs-12 location">
              <h4 class="mt-lg-0 mt-sm-4 text-white">Location & Contact</h4>
              <p class="text-white-50"><i>Pamulang, South Tangerang</i></p>
              <p class="mb-0 text-white-50"><i class="fa fa-phone mr-3"></i>0857-7047-2997</p>
              <p class="text-white-50"><i class="fa fa-envelope-o mr-3"></i>holydamnid@gmail.com</p>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col-md-12 text-center copyright">
              <p class=""><small class="text-white-50 text-center">HolyDamn Corporation © 2019. All rights reserved.</small></p>
            </div>
          </div>
        </div>

    <script src="Bootstrap/js/jquery.js"></script> 
    <script src="Bootstrap/js/popper.js"></script> 
    <script src="Bootstrap/js/bootstrap.js"></script>

</div>

</body>

</html>