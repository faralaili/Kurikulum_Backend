<?php

namespace BangunDatar;

class Persegi
{
  function Bangunan2() 
  {
    if (isset($_POST['sisi'])){
    $sisi = $_POST;
    $sisi = $_POST['sisi'];
    $luas = $sisi * $sisi;

    echo "Nilai sisi-sisi = $sisi <br>";
    echo "Luas =$sisi * $sisi = $luas";
  };

    
  }
}