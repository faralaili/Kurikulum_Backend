<?php
if(isset($_POST['submit'])){
    echo'<table>';
    echo'<tr><td>'.'nama barang : '.$_POST['nama_barang'].'</td></tr>';
    echo'<tr><td>'.'harga : '.$_POST['harga'].'</td></tr>';
}
if(isset($_GET['submit'])){
    echo'<table>';
    echo'<tr><td>'.'nama kurir : '.$_GET['nama_kurir'].'</td></tr>';
    echo'<tr><td>'.'nama pengirim : '.$_GET['nama_pengirim'].'</td></tr>';
    echo'<tr><td>'.'asal barang : '.$_GET['asal_barang'].'</td></tr>';
    echo'<tr><td>'.'tujuan barang : '.$_GET['nama_pengirim'].'</td></tr>';   
}
?>