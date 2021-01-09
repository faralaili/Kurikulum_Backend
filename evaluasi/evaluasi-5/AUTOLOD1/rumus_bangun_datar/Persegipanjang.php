<?php

namespace rumusbangundatar;

class Persegipanjang
{
    function Rumus2() 
    {
    if (isset($_POST['panjang'])){
    $panjang=$_POST['panjang'];
    $tinggi=$_POST['tinggi'];
    $luasPersegipanjang=($panjang * $tinggi);

    echo "panjang = $panjang <br>";
    echo "tinggi = $tinggi <br>";
    echo "Luas = " . $luasPersegipanjang ;
};

    }

        }
