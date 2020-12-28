<?php 

include "konektor.php";

$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$kategori = $_POST['kategori'];
$tanggal = $_POST['tanggal'];
$isi_artikel = $_POST['isi_artikel'];

$sql = $pdo->prepare("INSERT INTO artikel(judul, penulis, kategori, tanggal, isi_artikel) VALUES(:judul,:penulis,:kategori,:tanggal,:isi_artikel)");
$sql->bindParam(':judul', $judul);
$sql->bindParam(':penulis', $penulis);
$sql->bindParam(':kategori', $kategori);
$sql->bindParam(':tanggal', $tanggal);
$sql->bindParam(':isi_artikel', $isi_artikel);
$sql->execute();
if($sql){

  header("location: index.php"); 
}else{
  
  echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
  echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
}
?>