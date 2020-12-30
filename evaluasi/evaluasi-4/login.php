<?php
require_once('koneksi.php');
session_start();
class Log extends Koneksi
{
    public function log()
    {
        $error = 'anda blom register ';
         if(isset($_POST['submit'])){
             if(empty($_POST['username']) ||  empty($_POST['password'])){
                echo $error;
             }else{
                 $username = $_POST['username'];
                 $password = $_POST['password'];

                 $login ="SELECT username,pasword FROM user WHERE username ='$username'AND password ='$password')";
                 if(mysqli_query($this->konek(),$login)){
                     header("lacotion:tampilan_admin.php");
                 }else{
                     echo "$error";
                    
                 }
             }
         }
    }
}
$log = new Log();
if(isset($_SESSION['status'])){
    header("location:tampilan_admin.php");
}else{}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style3.css">  
</head>
<body>
<div class="container">
</head>  
<body>
    <div id="card">
        <form action="tampilan_admin.php" method="post">
            <center>
                <h1>silahkan login</h1>
            <label for="">Username</label>
            <input type="text" name="name" placeholder="Masukkan Username" id="form">
            <br>
            <label for="">Password</label>
            <input type="password" name="pass" placeholder="Masukkan Password" id="form">
            <br>
			<input type="reset" value="Cancel"><input type="submit" value="Login">
            <p>Belum punya akun?
			<a href="register.php">Registrasi</a>
			<center>
        </form>
    </div>
</body>
