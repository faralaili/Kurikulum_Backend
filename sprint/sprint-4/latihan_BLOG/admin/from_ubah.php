<!DOCTYPE html>
<html>
<head>
  <title>Ubah Artikel</title>  
  <script src="//cdn.ckeditor.com/4.15.1/full/ckeditor.js"></script>
  <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
 
       <div class="kotak">
         <h1>Ubah Artikel</h1>
         <?php
  
  include "konektor.php";
 
  $sql = $pdo->prepare("SELECT * FROM artikel WHERE id_artikel=:id_artikel");
  $sql->bindParam(':id_artikel', $id_artikel);
  $sql->execute();
  $data = $sql->fetch();
  ?>
  <form method="post" action="proses_ubah.php?id_artikel=<?php echo $id_artikel; ?>">
    <table cellpadding="8">
      <tr>
        <td>Judul</td>
        <td><input type="text" name="judul" value="<?php echo $data['judul']; ?>"></td>
      </tr>
      <tr>
        <td>Penulis</td>
        <td><input type="text" name="penulis" value="<?php echo $data['penulis']; ?>"></td>
      </tr>
      <tr>
        <td>Kategori</td>
        <td><input type="text" name="kategori" value="<?php echo $data['kategori']; ?>"></td>
      </tr>
      <tr>
        <td>Tanggal</td>
        <td><input type="date" name="tanggal" value="<?php echo $data['tanggal']; ?>"></td>
      </tr>
    </table>
    <!-- <hr> -->
    <textarea class="ckeditor" name="isi_artikel" value="<?php echo $data['isi_artikel']; ?>"></textarea> 
    <br/>
    <input type="submit" name="submit" value="Ubah" class="submit">
    <a href="index.php"><input type="button" value="Batal"></a>
  </form>  
  
   <!-- <button class="tombol">simpan</button> -->
  </div>
</body>
</html>