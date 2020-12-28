<?php

require_once 'koneksi.php';

if (isset($_POST['submit'])) {
    $nama_barang = $_POST['nama_barang'];
    $kode_bar= $_POST['kode_bar'];
    $harga = $_POST['harga'];

  // id_produk bernilai '' karena kita set auto increment
  $q = $conn->query("INSERT INTO barang_budi (nama_barang ,kode_bar,harga) VALUE ('$nama_barang', '$kode_bar', '$harga')");

  if ($q) {
    // pesan jika data tersimpan
   echo "<script>alert('Data barang berhasil ditambahkan'); window.location.href='index.php'</script>";
  } else {
    // pesan jika data gagal disimpan
   echo "<script>alert('Data barang gagal ditambahkan'); window.location.href='index.php'</script>";
  }
} else {
  
}
