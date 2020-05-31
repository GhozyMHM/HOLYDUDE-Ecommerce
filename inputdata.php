<?php
    include 'koneksidata.php';

    $nomor = $_POST['nomor'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $kota = $_POST['kota'];

    $conn = mysqli_connect($server, $user, $password, $db);
    $sql = "INSERT INTO anggota VALUES ('$nomor','$nama','$email','$alamat','$kota')";

    if (mysqli_query($conn, $sql)) {
        header ("location: indexdata.php"); 
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
?>