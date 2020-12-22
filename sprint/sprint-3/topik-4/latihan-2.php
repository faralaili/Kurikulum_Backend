<?php
$servername = "localhost";
$username = "root";
$password = "";

try{
$con = new PDO("mysql :host =$servername;dbname=keluarga", $username, $password);
 

 $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     echo "koneksi berhasil";
 }
 catch(PDOException $e){
      echo"koneksi gagal : ",$e->getmessage();
 }

 ?>