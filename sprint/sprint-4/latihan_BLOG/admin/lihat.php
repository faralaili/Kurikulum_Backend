<html>
<head>
  <title>Artikel Berfaedah</title>
  <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
       <h1>ARTIKEL PUISI</h1>
    <?php
  
  include "konektor.php";
  
  $id_artikel= $_GET['id_artikel'];
  
  $sql = $pdo->prepare("SELECT * FROM artikel WHERE id_artikel=:id_artikel");
  $sql->bindParam(':id_artikel', $id_artikel);
  $sql->execute();
  $data = $sql->fetch();
  
  echo "<td>".$data['judul']."</td>";
  echo "<td>".$data['penulis']."</td>";
  echo "<td>".$data['kategori']."</td>";
  echo "<td>".date('l, d-m-Y')."</td>";
  echo "<td>".$data['isi_artikel']."</td>";
    ?>
     <footer>
    <?php include("footer.php"); ?>
  </footer>
  