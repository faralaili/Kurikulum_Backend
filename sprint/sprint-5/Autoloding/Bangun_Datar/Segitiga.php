<?php
class Segitiga
{
   function Bangunan3()
   {
      if (isset($_POST['alas'])){
      $alas=$_POST['alas'];
      $tinggi=$_POST['tinggi'];
      $luassegitiga=($alas * $tinggi) / 2;

      echo "alas = $alas <br>";
      echo "tinggi = $tinggi <br>";
      echo "Luas = " . $luassegitiga ;
   };

    }
      }

?>
