<?php
include 'koneksidata.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];

$conn = mysqli_connect($server, $user, $password, $db);

$sql = "SELECT * FROM account WHERE username = '$username'";
$query = $conn->query($sql);
if ($query->num_rows != 0) {
  echo "<div class='alert alert-dark' role='alert'>
      Username Already Registered <br>
      <a href='register.php'>
      Back</a></div>";
} else {
  if (!$username || !$password1 || !$email) {
    echo "<div class='alert alert-dark' role='alert'>
        Don't Leave Empty Field <br>
        <a href='register.php'>
        Back</a></div>";
  } else {
    $data = "INSERT INTO account VALUES ('','$username','$email','$password1','$password2')";
    if ($password1 == $password2) {
      mysqli_query($conn, $data);
      echo "<div class='alert alert-dark' role='alert'>
          Register Success!
        </div>";
      echo "<meta http-equiv='refresh' content='1.5;url=login.php'>";
    } elseif ($password1 !== $password2) {
      echo "<div class='alert alert-danger' role='alert'>
        Register Error!
      </div>";
      echo "<meta http-equiv='refresh' content='1.5;url=register.php'>";
    }
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