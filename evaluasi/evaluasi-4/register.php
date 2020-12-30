<?php
require_once('koneksi.php');
session_start();
class Reg extends Koneksi
{
    public function reg()
    {
        $error = 'registerari terlebih dahulu';
         if(isset($_POST['submit'])){
             if(empty($_POST['username']) || empty($_POST['nama']) ||  empty($_POST['password'])){
                echo $error;
             }else{
                 $nama =$_POST['nama'];
                 $username = $_POST['username'];
                 $password = $_POST['password'];

                 $query = "INSERT INTO user (nama,username,password)
                 VALUES('$nama','$username','$password')";
                 if(mysqli_query($this->konek(),$query)){
                     header("lacotion:login.php");
                 }else{
                     echo "$error";
                    
                 }
             }
         }
    }
}
$reg = new Reg();
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
        <form action="#" method="post">
            <h1>silahkan register</h1>
            <center>
            <label for="">NAMA</label>
            <input type="text" name="name" placeholder="Masukkan nama" id="form">
            <br>    
            <label for="">USERNAME</label>
            <input type="text" name="name" placeholder="Masukkan Username" id="form">
            <br>
            <label for="">PASSWORD</label>
            <input type="password" name="pass" placeholder="Masukkan Passsword" id="form">
            <br>
            <input type="reset" value="Cancel"><input type="submit" value="Login">
            <p>Sudah punya akun?
			<a href="login.php">Login </a>
			<center>
        </form>
    </div>
</body>
</html>