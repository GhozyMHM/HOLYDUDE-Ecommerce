<?php
    include 'koneksidata.php';

    $fn = $_POST['fn'];
    $ln = $_POST['ln'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $conn = mysqli_connect($server, $user, $password, $db);
    $sql = "INSERT INTO contact VALUES ('','$fn','$ln','$email','$subject','$message')";

    if (mysqli_query($conn, $sql)) {
        header ("location: contact.php"); 
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
?>