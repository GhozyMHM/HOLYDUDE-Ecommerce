<?php
  $nama = ["Andi","Uun","Popol"];
  $nama[1] = "Iis";
  print_r($nama);
  echo "<br>";
  echo $nama[2]."<br>";
  echo "Nama dia : " . $nama[0] . "<br>";
  $warna = [
    "Muda" => "Biru",
    "Tua" => "Merah",
    "Pastel" => "Pink"
  ] ;
  echo $warna["Tua"]."<br>";
  // echo $warna[1]; tidak bisa
  $sample = ['Kambing', 'Domba', 'Sapi'];
  echo $sample[1];
?>