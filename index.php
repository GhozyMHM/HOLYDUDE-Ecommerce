<?php
include 'koneksidata.php';
session_start();
include 'session.php';
?>

<!DOCTYPE html>

<html>

<head>
  <title>HolyDude | Shop</title>
  <link rel="stylesheet" href="style/design.css">
  <link rel="stylesheet" href="style/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="style/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="style/owl.carousel.min.css" type="text/css">
  <link rel="shortcut icon" href="img/ms-icon-310x310.png">
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
            <a class="nav-link" href="about.php">About Us</a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Header section -->
    <header class="header-section">
      <nav class="main-navbar">
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
      </nav>
    </header>

    <div class="alert alert-dark text-center" role="alert">
      <b>TRY TO CUSTOM YOUR TSHIRT WITH YOUR OWN DESIGN OR PICTURE!
        (Visit Information Page Before Order)
      </b>
    </div>
    <!-- Hero section -->
    <section class="hero-section">
      <div class="hero-slider owl-carousel">
        <div class="hs-item set-bg" data-setbg="img/hold.jpg">
          <div class="container">
            <div class="row">
              <div class="col-xl-6 col-lg-7 text-white">
                <span>Your Classy Outfit</span>
                <h2>HolyDude</h2>
                <p>For those who are looking for outfit which makes them look trendy and Classy,
                  you all did the right thing by open this website.</p>
                <p>Happy Shopping!
                </p>
                <a href="#product" class="site-btn sb-line">DISCOVER</a>
                <a href="contact.php" class="site-btn sb-white">CONTACT</a>
              </div>
            </div>
          </div>
        </div>
        <div class="hs-item set-bg" data-setbg="img/hero23.jpg">
          <div class="container">
            <div class="row">
              <div class="col-xl-6 col-lg-7 text-black">
                <span>Your Classy Outfit</span>
                <h2>HolyDude</h2>
                <p>For those who are looking for outfit which makes them look trendy and Classy,
                  you all did the right thing by open this website.</p>
                <p>Happy Shopping!
                </p>
                <a href="#product" id="sbline">DISCOVER</a>
                <a href="contact.php" class="site-btn sb-white">CONTACT</a>
              </div>
            </div>
          </div>
        </div>
        <div class="hs-item set-bg" data-setbg="img/hero21.jpg">
          <div class="container">
            <div class="row">
              <div class="col-xl-6 col-lg-7 text-black">
                <span>Your Classy Outfit</span>
                <h2>HolyDude</h2>
                <p>For those who are looking for outfit which makes them look trendy and Classy,
                  you all did the right thing by open this website.</p>
                <p>Happy Shopping!
                </p>
                <a href="#product" id="sbline">DISCOVER</a>
                <a href="contact.php" class="site-btn sb-white">CONTACT</a>
              </div>
            </div>
          </div>
        </div>
        <div class="hs-item set-bg" data-setbg="img/hero22.jpg">
          <div class="container">
            <div class="row">
              <div class="col-xl-6 col-lg-7 text-black">
                <span>Your Classy Outfit</span>
                <h2>HolyDude</h2>
                <p>For those who are looking for outfit which makes them look trendy and Classy,
                  you all did the right thing by open this website.</p>
                <p>Happy Shopping!
                </p>
                <a href="#product" id="sbline">DISCOVER</a>
                <a href="contact.php" class="site-btn sb-white">CONTACT</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="slide-num-holder" id="snh-1"></div>
      </div>
    </section>
    <!-- Hero section end -->
    <!-- Header section end -->

    <div class="container" id="product">
      <h1>CUSTOM DESIGN</h1>
      <hr id="garis">
      <div class="row">

        <div class="col-md-3 offset-3">
          <div class="card mt-3" style="width: 15rem;">
            <img src="img/custom1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Custom (Black)</h5>
              <p class="card-text">Upload your design here!</p>
              <a href="customblack.php" class="btn btn-primary">BUY</a>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card mt-3 mx-2" style="width: 15rem;">
            <img src="img/custom2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Custom (White)</h5>
              <p class="card-text">Upload your design here!</p>
              <a href="#" class="btn btn-primary">BUY</a>
            </div>
          </div>
        </div>

      </div>


      <div class="container" id="product">
        <h1>OUR CATALOGS</h1>
        <hr id="garis">
        <div class="row">

          <div class="col-md-3">
            <div class="card mt-3" style="width: 15rem;">
              <img src="img/baju1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Black 01</h5>
                <p class="card-text">Allergic to Close Minded People Edition</p>
                <a href="#" class="btn btn-primary">BUY</a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card mt-3 mx-2" style="width: 15rem;">
              <img src="img/baju2.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">White 01</h5>
                <p class="card-text">Allergic to Close Minded People Edition</p>
                <a href="#" class="btn btn-primary">BUY</a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card mt-3 mx-2" style="width: 15rem;">
              <img src="img/baju3.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Black 02</h5>
                <p class="card-text">Sorry You Are Not Special Edition</p>
                <a href="#" class="btn btn-primary">BUY</a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card mt-3 mx-2" style="width: 15rem;">
              <img src="img/baju4.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">White 02</h5>
                <p class="card-text">Sorry You Are Not Special Edition</p>
                <a href="#" class="btn btn-primary">BUY</a>
              </div>
            </div>
          </div>

        </div>

        <div class="row">

          <div class="col-md-3">
            <div class="card mt-3 mx-2" style="width: 15rem;">
              <img src="img/baju5.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Black 03</h5>
                <p class="card-text">Gradient Edition</p>
                <a href="#" class="btn btn-primary">BUY</a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card mt-3 mx-2" style="width: 15rem;">
              <img src="img/baju6.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">White 03</h5>
                <p class="card-text">Gradient Edition</p>
                <a href="#" class="btn btn-primary">BUY</a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card mt-3 mx-2" style="width: 15rem;">
              <img src="img/baju7.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Black 04</h5>
                <p class="card-text">Emoticon Edition</p>
                <a href="#" class="btn btn-primary">BUY</a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card mt-3 mx-2" style="width: 15rem;">
              <img src="img/baju8.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Black 05</h5>
                <p class="card-text">Simple Edition</p>
                <a href="black5.php" class="btn btn-primary">BUY</a>
              </div>
            </div>
          </div>

        </div>
      </div>

      <section class="features-section spad">
        <div class="features-ads">
          <div class="container">
            <div class="row">
              <div class="col-lg-4">
                <div class="single-features-ads first">
                  <img src="img/icons/f-delivery.png" alt="">
                  <h4>Free Shipping</h4>
                  <p>This is our service that everyone loves, try it! Go order your favorite t-shirt now.</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="single-features-ads second">
                  <img src="img/icons/coin.png" alt="">
                  <h4>Custom Your T-Shirt</h4>
                  <p>Not only provides some cool catalogs, but we also accept any design requests that you want</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="single-features-ads">
                  <img src="img/icons/chat.png" alt="">
                  <h4>Friendly Support</h4>
                  <p>Not only to talk about our products, you can also tell your problem with our admin,
                    because our admin can be your friend with their friendliness. </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

    </div>

    <div class="mt-5 mt-n1 pt-5 pb-4 footer bg-dark">
      <div class="container">
        <div class="newslatter-form bg-dark pb-5">
          <div class="row">
            <div class="col-lg-12">
              <form method="POST" action="datasubs.php">
                <input type="text" placeholder="Your email address" name="email">
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
            <p class=""><small class="text-white-50 text-center">HolyDude Corporation © 2019. All rights reserved.</small></p>
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