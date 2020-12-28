<?php
    session_start();
    if (isset($_SESSION['username'])){
        header("Location: register.php");
    
?>
<html>
<head>
  <title>Artikel Berfaedah</title>
  <link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body>
  <h1>Artikel user</h1>
  <table border="1" width="100%">
  <tr>
    <th>no</th>
    <th>Judul</th>
    <th>Penulis</th>
    <th>Kategori</th>
    <th>Tanggal</th>
    <th>Artikel</th>
    <th colspan="3">Aksi</th>
  </tr>
  <?php

  $no = 1;
  include "konektor.php";
  // Buat query untuk menampilkan semua data siswa
  $sql = $pdo->prepare("SELECT * FROM artikel");
  $sql->execute(); // Eksekusi querynya
  while($data = $sql->fetch()){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
    echo "<td>".$no++."</td>";
    echo "<td>".$data['judul']."</td>";
    echo "<td>".$data['penulis']."</td>";
    echo "<td>".$data['kategori']."</td>";
    echo "<td>".date('l, d-m-Y')."</td>";
    echo "<td>".$data['isi_artikel']."</td>";
    echo "<td><a href='lihat_user.php?id_artikel=".$data['id_artikel']."'>Lihat</a></td>";
    echo "</tr>";
  }
  ?>
   <a href="logout_user.php">logout</a>

<footer>
    <?php include("footer_user.php"); ?>
</footer>
  </table>
</body>
</html>
<?php
}