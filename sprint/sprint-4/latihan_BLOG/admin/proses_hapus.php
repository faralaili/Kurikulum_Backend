<?php
// Load file koneksi.php
include "konektor.php";
// Ambil data ID yang dikirim oleh index.php melalui URL
$id_artikel = $_GET['id_artikel'];
// Query untuk menghapus data siswa berdasarkan ID yang dikirim
$sql = $pdo->prepare("DELETE FROM artikel WHERE id_artikel=:id_artikel");
$sql->bindParam(':id_artikel', $id_artikel);
$execute = $sql->execute(); // Eksekusi / Jalankan query
if($execute){ // Cek jika proses simpan ke database sukses atau tidak
  // Jika Sukses, Lakukan :
  header("location: index.php"); // Redirect ke halaman index.php
}else{
  // Jika Gagal, Lakukan :
  echo "Data gagal dihapus. <a href='index.php'>Kembali</a>";
}
?>s hapus