<?php

include "konektor.php";

$id_artikel = $_GET['id_artikel'];

$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$kategori = $_POST['kategori'];
$tanggal = $_POST['tanggal'];
$isi_artikel = $_POST['isi_artikel'];

$sql = $pdo->prepare("UPDATE artikel SET judul=:judul, penulis=:penulis, kategori=:kategori, tanggal=:tanggal, isi_artikel=:isi_artikel WHERE id_artikel=:id_artikel");
$sql->bindParam(':judul', $judul);
$sql->bindParam(':penulis', $penulis);
$sql->bindParam(':kategori', $kategori);
$sql->bindParam(':tanggal', $tanggal);
$sql->bindParam(':isi_artikel', $isi_artikel);
$sql->bindParam(':id_artikel', $id_artikel);
$execute = $sql->execute(); 
if($execute){ 

  header("location: index.php"); 
 }else{

  echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
   echo "<br><a href='from_ubah.php'>Kembali Ke Form</a>";
}
?>