<?php

    require "vendor/autoload.php";

    use BangunDatar\Segitiga;

?>

<!DOCTYPE html>
<html>
<head>
<title>AUTOLODER</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="style1.css">
</head>
<body>

<h2 align ="center">Segitiga</h2>
<form action="" method="post">
<table class="table1" style="margin-left:auto;margin-right:auto">
  <tr><td>Alas <input type="text" name="alas"></td></tr>
  <tr><td>Tinggi <input type="text" name="tinggi"></td></tr>
  <tr><td><input class="tombol_submit" type="submit" name="proses"></td></tr>
</table>
</form>

<?php

$segitiga = new Segitiga;
$segitiga->Bangunan3();

?>