<?php

class Lingkaran
{
  function Bangunan1() 
  {
    if (isset($_POST['jari'])){
    $jari = $_POST;
    $jari = $_POST['jari'];
    $luas = 3.14 * $jari * $jari;

    echo "Nilai Jari-jari = $jari <br>";
    echo "Luas = 3.14 * $jari * $jari = $luas";
  };

    
  }
}
