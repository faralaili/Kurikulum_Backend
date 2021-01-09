<?php
class Belahketupat
{
   function Rumus1()
   {
      if (isset($_POST['D1'])){
      $D1=$_POST['D1'];
      $D2=$_POST['D2'];
      $luasbelahketupat= 2*($D1 * $D2);

      echo "D1 = $D1 <br>";
      echo "D2 = $D2 <br>";
      echo "Luas = " . $luasbelahketupat ;
   };

    }
      }

?>