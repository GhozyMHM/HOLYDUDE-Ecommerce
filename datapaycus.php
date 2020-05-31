<?php
    include 'koneksidata.php';

        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $address_ = $_POST['address_'];
        $phone = $_POST['phone'];
        $colour = $_POST['colour'];
        $size = $_POST['size'];
        $designf = $_POST['designf'];
        $designb = $_POST['designb'];
    
        $folder = './design/';
        $picname = $_FILES['design']['name'];
        $picsource = $_FILES['design']['tmp_name'];
        move_uploaded_file($picsource, $folder.$picname);

        $conn = mysqli_connect($server, $user, $password, $db);
        $sql = "INSERT INTO paymentcustom VALUES ('','$fullname','$email','$address_','$phone','$colour','$size','$designf','$designb','$picname')";
    
        if (mysqli_query($conn, $sql)) {
            header ("location: paymentmethod.php"); 
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
?>