<?php

    require "vendor/autoload.php";
    use rumusbangundatar\Belahketupat;

?>
<!DOCTYPE html>
<html>
<head>
    <title>belah ketupat</title>
</head>
<body>
<h2 align ="center">Belah ketupat</h2>
<form action="" method="post">
<table>
  <tr><td>D1 <input type="text" name="D1"></td></tr>
  <tr><td>D2 <input type="text" name="D2"></td></tr>
  <tr><td><input class="tombol_submit" type="submit" name="proses"></td></tr>
</table>
</form>

<?php

$belahketupat = new Belahketupat ;
$belahketupat->Rumus1 ();

?>
