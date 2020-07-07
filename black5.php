<?php
include 'koneksidata.php';
session_start();
include 'session.php';
?>

<!DOCTYPE html>

<html>

<head>
  <title>HolyDamn | Product</title>
  <link rel="stylesheet" href="style/produk.css">
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
  <link rel="shortcut icon" href="ms-icon-310x310.png">
  <script src="https://kit.fontawesome.com/9fb210ee5d.js" crossorigin="anonymous"></script>
</head>

<body>

  <div class="wrap">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#"><img id="h" src="img/hhh.png"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="info.php">Information</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="account.php">Account (<?php echo $_SESSION['username']; ?>)</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About Us<span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Header section -->
    <header class="header-section">
      <nav class="main-navbar">
        <div class="container">
          <!-- menu -->
          <ul class="main-menu">
            <li><a href="#product">T-Shirt</a></li>
            <li><a href="#">Jacket</a>
              <ul class="sub-menu">
                <li><a><i>(Soon)</i></a></li>
              </ul>
            </li>
            <li><a href="#">Beanny</a>
              <ul class="sub-menu">
                <li><a><i>(Soon)</i></a></li>
              </ul>
            </li>
            <li><a href="#">Shoes</a>
              <ul class="sub-menu">
                <li><a><i>(Soon)</i></a></li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <div class="alert alert-dark text-center" role="alert">
      <b>**Visit Information Page before order
      </b>
    </div>

    <div class="page-top-info">
      <div class="container">
        <h4>Product Page</h4>
        <div class="site-pagination">
          <a href="shop.html"> &lt;&lt; Back to Home</a>
        </div>
      </div>
    </div>

    <section class="product-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="product-pic-zoom">
              <img class="product-big-img" src="baju8.jpg" alt="">
            </div>
            <div class="product-thumbs" tabindex="1" style="overflow: hidden; outline: none;">
              <div class="product-thumbs-track">
                <div class="pt active" data-imgbigurl="img/baju8.jpg"><img src="img/baju8.jpg" alt=""></div>
                <div class="pt" data-imgbigurl="img/itemback.jpg"><img src="img/itemback.jpg" alt=""></div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 product-details">
            <h2 class="p-title">Our Catalog</h2>

            <p><a href="info.php">Click Here to See The Information About Design's Size</a></p>

            <h3 class="p-price">Rp125.000</h3>
            <h4 class="p-stock">Available: <span>In Stock</span></h4>
            <div class="p-rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </div>
            <div class="fw-size-choose">
              <p>Size</p>
              <div class="sc-item">
                <input type="radio" name="sc" id="xs-size">
                <label for="xs-size">S</label>
              </div>
              <div class="sc-item">
                <input type="radio" name="sc" id="s-size">
                <label for="s-size">M</label>
              </div>
              <div class="sc-item">
                <input type="radio" name="sc" id="m-size" checked="">
                <label for="m-size">L</label>
              </div>
              <div class="sc-item">
                <input type="radio" name="sc" id="l-size">
                <label for="l-size">XL</label>
              </div>
              <div class="quantity">
                <p>Quantity</p>
                <div class="pro-qty">
                  <input type="text" value="1">
                </div>
              </div>
              <a href="paymentcatalog.php" class="site-btn mb-3">BUY NOW</a>
              <a target="_blank" href="http://www.bit.ly/OrderHolydamn" class="site-btn">BUY VIA WHATSAPP</a>
            </div>
          </div>
        </div>
    </section>
    <!-- product section end -->

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
            <p class="pr-5 text-white-50">HolyDamn is a clothing brand which focus on classy appearance from each people through
              the classy outfit that we produce.
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

      <script src="js/jquery-3.2.1.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/jquery.slicknav.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/jquery.nicescroll.min.js"></script>
      <script src="js/jquery.zoom.min.js"></script>
      <script src="js/jquery-ui.min.js"></script>
      <script src="js/main.js"></script>

</body>

</html>