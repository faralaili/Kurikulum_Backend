<?php
require_once('koneksi.php');  
session_start(); 
class Blog extends koneksi{ 

    public function blog_index(){ 

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
					</div>
					<footer>
				<?php include("footer.php"); ?>
			</footer>
					<?php
            }
        }else{ //Jika Tidak ada data maka 
			echo '<h2>Tidak ada Artikel</h2>';
			
		}
	}
}