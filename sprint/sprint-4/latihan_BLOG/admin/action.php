<?php
session_start();
if(!isset($_SESSION['level'])){
    header("location: login.php");

} else if($_SESSION['level'] == 'admin') {
    header("location: index.php");

} else if($_SESSION['level'] == 'penulis') {
    header("location: halaman_user.php");
}
?>