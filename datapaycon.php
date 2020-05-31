<?php
    include 'koneksidata.php';

        $holder = $_POST['holder'];
    
        $folder = './design/';
        $picname = $_FILES['pict']['name'];
        $picsource = $_FILES['pict']['tmp_name'];
        move_uploaded_file($picsource, $folder.$picname);

        $conn = mysqli_connect($server, $user, $password, $db);
        $sql = "INSERT INTO paymentconfirmation VALUES ('','$holder','$picname')";
    
        if (mysqli_query($conn, $sql)) {
            header ("location: thanks.php"); 
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
?>