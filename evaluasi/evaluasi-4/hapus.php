<?php 
include 'koneksi.php';

$aksi = $_GET['aksi'];
 if($aksi == "tambah"){
 	$db->input($_POST['judul'],$_POST['penulis'],$_POST['kategori'],$_POST['tanggal'],$_POST['artikel']);
 	header("location:tampilan_admin.php");
 }elseif($aksi == "hapus"){ 	
 	$db->hapus($_GET['id']);
	header("location:tampilan_admin.php");
 }elseif($aksi == "update"){
 	$db->update($_POST['judul'],$_POST['penulis'],$_POST['kategori'],$_POST['tanggal'],$_POST['artikel']);
 	header("location:tampilan_admin.php");
 }
?>
 