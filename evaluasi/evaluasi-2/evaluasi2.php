<?php

class Register
{
  
public function __construct($nama,$NIK,$alamat){

   $this -> $nama;
   $this -> $NIK;
   $this -> $alamat;

 }

 public static function muridbaru() 
{
  echo " nama anda: ".PHP_EOL;
  $nama = (int) fgets(STDIN);
  echo " NIK anda: ".PHP_EOL;
  $NIK =(int) fgets(STDIN);
  echo "alamat anda: ".PHP_EOL;
  $alamat = (int) fgets(STDIN);
         }

    }

 Register :: muridbaru();