<?php
include "koneksidata.php";
session_start();

if (isset($_POST['submitbtn'])) {
    $username = $_POST['username'];
    $password1 = $_POST['password1'];

    $conn = mysqli_connect($server, $user, $password, $db);

    $ceklogin = mysqli_query($conn, "SELECT * FROM account WHERE Username = '$username' AND Password = '$password1'");

    if (mysqli_num_rows($ceklogin) == 1) {
        $_SESSION['username'] = $username;
        echo "<div class='alert alert-dark' role='alert'>
            Login Success!
            </div>";
        echo "<meta http-equiv='refresh' content='1;url=index.php'>";
    } else {
        echo "<div class='alert alert-dark' role='alert'>
            Login Error!
            </div>";
        echo "<meta http-equiv='refresh' content='1;url=login.php'>";
    }
}

?>

<!DOCTYPE html>

<html>

<head>
    <title>HolyDude | Register</title>
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

    <script src="Bootstrap/js/jquery.js"></script>
    <script src="Bootstrap/js/popper.js"></script>
    <script src="Bootstrap/js/bootstrap.js"></script>


</body>

</html>