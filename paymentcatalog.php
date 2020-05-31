<?php
include 'koneksidata.php';
session_start();
include 'session.php';
?>


<!DOCTYPE html>

<html>

<head>
    <title>HolyDude | Checkout Form</title>
    <link rel="stylesheet" href="style/payment.css">
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
                    <a class="nav-link" href="account.php">Account (<?php echo $_SESSION['username'];?>)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
</div>
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

        <!--Main layout-->
        <main class="mt-5 pt-n1">
          <div class="container">
      
            <!-- Heading -->
            <h2 class="my-5 h2 text-center">Checkout Form</h2>
            
      
            <!--Grid row-->
            <div class="row">
              <div class="col-md-8 offset-2">
                <form method="POST" action="datapaylog.php" enctype="multipart/form-data">
                        <div class="md-form ">
                          <label>Full Name</label>
                          <input type="text" class="form-control" placeholder="Enter Full Name" name="fullname" required="" />
                        </div>

                        <div class="md-form mt-3 ">
                          <label>Email</label>
                          <input type="text" class="form-control" placeholder="youremail@example.com" name="email"/>
                        </div>
                  
                        <div class="md-form mt-3 ">
                          <label>Address</label>
                          <textarea type="text" class="form-control"name="address_">
                          </textarea>
                        </div>
                        <div class="md-form mt-3">
                          <label>Phone Number</label>
                          <input type="text" class="form-control" placeholder="0xxx-xxxx-xxxx" name="phone"/>
                        </div>                      

                       <div class="input-group mt-3">
                        <select class="custom-select" name = "code">
                          <option selected>(Choose T-Shirt Code)</option>
                          <option value="Black 01">Black 01</option>
                          <option value="Black 02">Black 02</option>
                          <option value="Black 03">Black 03</option>
                          <option value="Black 04">Black 04</option>
                          <option value="Black 05">Black 05</option>
                          <option value="White 01">White 01</option>
                          <option value="White 02">White 02</option>
                          <option value="White 03">White 03</option>
                        </select>
                       </div>


                        <div class="input-group mt-3">
                            <select class="custom-select" name = "size">
                              <option selected>(Choose T-Shirt Size)</option>
                              <option value="S">S</option>
                              <option value="M">M</option>
                              <option value="L">L</option>
                              <option value="XL">XL</option>
                              <option value="XXL">XXL</option>
                            </select>
                        </div>

                        <button class="btn btn-primary btn-lg btn-block mt-3 mb-5" type="submit" name="submit" value="Submit">Submit</button>
                        </div>
                </form>
              </div>
            </div>
          </div>
        </main>
             <!--Main layout-->




<!--Footer-->
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
              <li>100% Money Back</li>
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





