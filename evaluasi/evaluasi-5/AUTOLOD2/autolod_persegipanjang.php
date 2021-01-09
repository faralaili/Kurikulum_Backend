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
  <tr><td><input class="tombol_submit" type="submit" name="proses"></td></tr>
</table>
</form>

<?php
function AUTOLOD2Rumus2 ()
{

$file = "persegipanjang.php";
if (is_readable($file)) {
require $file;
}
}

spl_autoload_register("AUTOLOD2Rumus2");

$persegipanjang = new Persegipanjang ();
$persegipanjang->Rumus2 ();

?>
