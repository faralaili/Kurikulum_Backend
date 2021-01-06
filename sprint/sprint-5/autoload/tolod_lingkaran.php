<?php

    require "vendor/autoload.php";

    use BangunDatar\Lingkaran;

    

?>

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

    $lingkaran = new Lingkaran ();
    $lingkaran->Bangunan1 ();

?>
