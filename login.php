<?php
  session_start();
?>

<!DOCTYPE html>

<html>

<head>
    <title>HolyDamn | Login</title>
    <link rel="stylesheet" href="style/login.css">
    <link rel="stylesheet" href="style/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="style/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="style/nice-select.css" type="text/css">
    <link rel="stylesheet" href="style/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="style/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="style/slicknav.min.css" type="text/css">
    <link rel="shortcut icon" href="img/ms-icon-310x310.png">
    <script src="https://kit.fontawesome.com/9fb210ee5d.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="login-page">
        <div class="form">
          <form class="login-form" method="POST" action="datalogin.php">
            <img src="img/mainlogoholydamn.png">
            <input type="text" placeholder="Username" name="username"/>
            <input type="password" placeholder="Password" name="password1"/>
            <input class="button" type="submit" name="submitbtn" value="LOGIN">
            <p class="message">Not Registered? <a href="register.php">Create an account</a></p>
            <p class="message mt-2"><a class="text-center" href="index.php">Back to The Website</a></p>
          </form>
        </div>
      </div>

    <script src="Bootstrap/js/jquery.js"></script> 
    <script src="Bootstrap/js/popper.js"></script> 
    <script src="Bootstrap/js/bootstrap.js"></script>


</body>

</html>