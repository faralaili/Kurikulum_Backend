<?php

require_once 'koneksi.php';

if (isset($_POST['submit'])) {
  $id = $_POST['id'];
  $n_barang = $_POST['nama_barang'];
  $kode_bar = $_POST['kode_bar'];
  $harga = $_POST['harga'];
  
  // update data berdasarkan id_produk yg dikirimkan
  $q = $conn->query("UPDATE barang_budi SET nama_barang = '$n_barang', kode_bar = '$kode_bar', harga = '$harga' WHERE id = '$id'");

  if ($q) {
    // pesan jika data berubah
    echo "<script>alert('Data barang berhasil diubah'); window.location.href='index.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data barang gagal diubah'); window.location.href='index.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: index.php');
}