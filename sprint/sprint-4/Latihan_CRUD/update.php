<?php

require_once 'koneksi.php';

// cek id
if (isset($_GET['id'])) {
  $id = $_GET['id'];

  // ambil data berdasarkan id_produk
  $q = $conn->query("SELECT * FROM barang_budi WHERE id = '$id'");

  foreach ($q as $dt) :
  ?>

  <h1>CRUD dengan PHP MySQL</h1>
  <h2>Halaman Ubah Data</h2>

  <form action="proses_update.php" method="post">
    <input type="hidden" name="id" value="<?= $dt['id'] ?>">
    <input type="text" name="nama_barang" value="<?= $dt['nama_barang'] ?>">
    <input type="text" name="kode_bar" value="<?= $dt['kode_bar'] ?>">
    <input type="number" name="harga" value="<?= $dt['harga'] ?>">
    <input type="submit" name="submit" value="Ubah Data">
  </form>

  <?php
  endforeach;
}
