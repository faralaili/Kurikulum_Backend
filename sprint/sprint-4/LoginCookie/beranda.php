<?php

$username = 'malam';
$password = 'wengi';

$username = $_POST['username'];
$password = $_POST['password'];

setcookie('username',$username,time() + (3600 * 30), "/");

?>

<?php
if(isset($_COOKIE['username'])){
   header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>
    <h1>Selamat, anda sudah login</h1>
    <a href="logout.php">logout</a>
</center>
</body>
</html>