<?php
    include 'koneksidata.php';

        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $address_ = $_POST['address_'];
        $phone = $_POST['phone'];
        $code = $_POST['code'];
        $size = $_POST['size'];

        $conn = mysqli_connect($server, $user, $password, $db);
        $sql = "INSERT INTO paymentcatalog VALUES ('','$fullname','$email','$address_','$phone','$code','$size')";
    
        if (mysqli_query($conn, $sql)) {
            header ("location: paymentmethod.php"); 
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
?>