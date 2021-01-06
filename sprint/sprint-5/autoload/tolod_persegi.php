<?php

    require "vendor/autoload.php";

    use BangunDatar\Persegi;

?>



<!DOCTYPE html>
<html>
<head>
<title>AUTOLODER</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="style1.css">
</head>
<body>

<h2 align="center">Persegi</h2>
<form action="" method="post">
<table class="table1" style="margin-left:auto;margin-right:auto">
<tr><td>sisi <input type="text" name="sisi"></td></tr>
<tr><td><input class="tombol_submit" type="submit" name="proses"></td></tr>
</table>
</form>  

<?php

$persegi = new Persegi();
$persegi->Bangunan2();

?>