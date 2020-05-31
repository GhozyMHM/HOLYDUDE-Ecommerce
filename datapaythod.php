<?php
    include 'koneksidata.php';

        $method = $_POST['method'];
        $shipping = $_POST['shipping'];

        $conn = mysqli_connect($server, $user, $password, $db);
        $sql = "INSERT INTO paymentmethod VALUES ('','$method','$shipping')";
    
        if (mysqli_query($conn, $sql)) {
            header ("location: paymentconfirmation.php"); 
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
?>