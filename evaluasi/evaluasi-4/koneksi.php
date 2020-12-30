<?php

class Koneksi
{
    public function konek()
    {
    
        $con = mysqli_connect('localhost', 'root', 'faralaili', 'dbproject'); //Membuat koneksi dengan database

        return $con;
    }
}