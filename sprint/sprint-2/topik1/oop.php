<?php
class book
{
  
  public $judulbuku;
  public $isbn;
  
  public function __construct ($judulbuku=" judulbuku", $isbn="isbn") {
    $this->judulbuku = $judulbuku;
    $this->isbn = $isbn;
  }
  public function getinfo(){
  return "$this->judulbuku ,$this->isbn ";
  }

}
  $book1 = new book ("malingkundang" ,18);
  $book2 = new book ("cinderela" ,20 );

  echo "peminjaman : " . $book1 -> getinfo();
  echo "<br>";
  echo "pengebalian : " . $book2-> getinfo();
  ?>