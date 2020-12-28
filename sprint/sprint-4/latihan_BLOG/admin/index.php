<?php
session_start();
include 'konektor.php';
   if (isset($_SESSION["username"]) ) {
    header("location:login.php");
    exit;
}
?>
</body>
</html>
<html>
  <head>
    <form action="login.php" method="post">
    <link rel="stylesheet" type="text/css" href="style3.css">
  </head>
  <body>
    <h1>Artikel Admin</h1>
    <a href="from_simpan.php">Tambah Data</a><br><br>
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
  
  $sql = $pdo->prepare("SELECT * FROM artikel");
  $sql->execute(); 
  while($data = $sql->fetch()){
    echo "<tr>";
    echo "<td>".$no++."</td>";
    echo "<td>".$data['judul']."</td>";
    echo "<td>".$data['penulis']."</td>";
    echo "<td>".$data['kategori']."</td>";
    echo "<td>".date('l, d-m-Y')."</td>";
    echo "<td>".$data['isi_artikel']."</td>";
    echo "<td><a href=proses_ubah.php?id_artikel=".$data['id_artikel']."'>Ubah</a></td>";
    echo "<td><a href='proses_hapus.php?id_artikel=".$data['id_artikel']."'>Hapus</a></td>";
    echo "<td><a href='lihat.php?id_artikel=".$data['id_artikel']."'>Lihat</a></td>";
    echo "</tr>";
  }
  ?>
  </table>
      <a href="logout.php">LOGOUT</a>
        
  <footer>
    <?php include("footer.php"); ?>
  </footer>
</body>
</html>
