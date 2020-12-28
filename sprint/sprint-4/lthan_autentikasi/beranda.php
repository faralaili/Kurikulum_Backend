<?php
// panggil koneksinya
require_once 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title>AUTENTIKASI</title>
</head>
<body>
  <h1> AUTENTIKASI</h1>

    <input type="submit" name="submit" value="Tambah barang">
<br>
</form>
<br>
  <table border="1">
    <tr>
      <th>No.</th> <th>Nama Barang</th>
      <th>Kode Bar</th>
      <th>Harga</th>
      <th colspan="2">Aksi</th>
    </tr>

    <?php
    // Tampilkan semua data
    $q = $conn->query("SELECT * FROM barang_budi");

    $no = 1; // nomor urut
    while ($dt = $q->fetch_assoc()) :
    ?>

    <tr>  
      <td><?= $no++ ?></td>
      <td><?= $dt['nama_barang'] ?></td>
      <td><?= $dt['kode_bar'] ?></td>
      <td><?= $dt['harga'] ?></td>
      <td><a href="update.php?id=<?= $dt['id'] ?>">Ubah</a></td>
      <td><a href="delete.php?id=<?= $dt['id'] ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a></td>
    </tr>

    <?php
    endwhile;
    ?> 

  </table>
  <br>
  <a href="logout.php"><input type="submit" name="logout" value="Logout"></a>
</body>
</html>