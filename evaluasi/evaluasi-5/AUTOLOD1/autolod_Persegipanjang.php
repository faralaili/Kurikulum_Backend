<?php

   require "vendor/autoload.php";
   use rumus_bangun_datar\Persegipanjang;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>persegi panjang</title>
</head>
<body>
  
<h2 align ="center">Persegi panjang</h2>
<form action="" method="post">
<table>
  <tr><td>panjang <input type="text" name="panjang"></td></tr>
  <tr><td>tinggi <input type="text" name="tinggi"></td></tr>
  <tr><td><input type="submit" name="proses"></td></tr>
</table>
</form>

<?php

$Persegipanjang = new Persegipanjang ;
$Persegipanjang->Rumus2 ();

?>
  
</body>
</html>