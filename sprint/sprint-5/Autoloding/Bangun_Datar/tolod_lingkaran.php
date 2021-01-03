<!DOCTYPE html>
<html>
<head>
<title>AUTOLODER</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="style1.css">
</head>
<body>

<h2 align= "center">Lingkaran</h2>
<form action="" method="post">
<table class="table1" style="margin-left:auto;margin-right:auto">
<tr><td>Jari - Jari <input type="text" name="jari"></td></tr>
<tr><td><input class="tombol_submit" type="submit" name=""></td></tr>
</table>
</form>
<?php
function autoloadBangunan1 ()
{
$file = "Lingkaran.php";
if (is_readable($file)) {
require $file;
}
}

spl_autoload_register("autoloadBangunan1");

$lingkaran = new Lingkaran ();
$lingkaran->Bangunan1 ();

?>
