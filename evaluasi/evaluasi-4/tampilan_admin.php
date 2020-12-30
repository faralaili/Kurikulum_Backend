<?php
require_once('koneksi.php');  
session_start(); 
class tampilan extends Koneksi{ 

    public function tampil(){ 

        $hasil =  "SELECT * FROM artikel";
       
        $blogs = $this->konek()->query($hasil); 
        ?>
       
		<h1><i>Artikel puisi</i></h1> 
		<link rel="stylesheet" type="text/css" href="style.css">
        <?php
        if ($blogs->num_rows > 0){
			while($blog = $blogs->fetch_assoc()){ 
				?>
                <div style="border: 1px solid #000; padding: 5%; margin-top: 3%">
                    <h2><?php echo $blog['judul'] ?></h2> 
						<p><?php echo $blog['kategori']?></>
						<p><?php echo $blog["isi_artikel"] ?></p> 
                            penulis : <i><?php echo $blog['penulis'] ?>  
                            <?php
                            if($_SESSION['status']="login"){
                                ?>
                            } 
                            ||<a href="hapus.php"?id=<?php echo $blog['id'];?>">hapus</a>
                            ||<a href="edit.php"?id=<?php echo $blog['id'];?>">edit</a>
                            <?php
                            }
                            ?>
					</div>
                    <a href="logout.php">LOGOUT</a>
        
					<?php
            }
        }else{ //Jika Tidak ada data maka 
			echo '<h2>Tidak ada Artikel</h2>';
			
		}
	}
}