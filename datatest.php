<?php
    include 'koneksitest.php';
    
    $Firstname = $_POST['Firstname'];
    $Lastname = $_POST['Lastname'];
    $Email = $_POST['Email'];
    $phone = $_POST['phone'];
    $Identity = $_POST['Identity'];

    $conn = mysqli_connect($server, $user, $password, $db);
    $sql = "INSERT INTO checkout VALUES ('','$Firstname','$Lastname','$Email','$phone','$Identity')";

    if (mysqli_query($conn, $sql)) {
        header ("location: paymentcustom.php"); 
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
?>