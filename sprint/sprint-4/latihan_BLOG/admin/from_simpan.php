<!DOCTYPE html>
<html>
<head>
  <title>Tambah Artikel</title>  
  <script src="//cdn.ckeditor.com/4.15.1/full/ckeditor.js"></script>
  <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
 
       <div class="kotak">

         <h1>Tambah Artikel</h1>
  <form method="post" action="proses_simpan.php">
    <table cellpadding="8">
      <tr>
        <td>Judul</td>
        <td><input type="text" name="judul"></td>
      </tr>
      <tr>
        <td>Penulis</td>
        <td><input type="text" name="penulis"></td>
      </tr>
      <tr>
        <td>Kategori</td>
        <td><input type="text" name="kategori"></td>
      </tr>
      <tr>
        <td>Tanggal</td>
        <td><input type="date" name="tanggal"></td>
      </tr>
    </table>
    <!-- <hr> -->
    <textarea class="ckeditor" name="isi_artikel"></textarea> 
    <br/>
    <input type="submit" name="submit" value="submit" class="submit">
    <a href="index.php"><input type="button" value="Batal"></a>
  </form>


  
     <!-- <button class="tombol">simpan</button> -->
  </div>
</body>
</html>