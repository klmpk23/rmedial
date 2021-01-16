<?php
   //class buah
   class buah{
     //property
     var $nama;
     var $warna;
     
     //method buah
     function tampilkan_nama(){
        return"ini adalah buah apel";
     }
         
        
     function warna_kulit(){
       return " berwarna merah";
     }
    
    
   }

//instansiasi class buah
$buah = new buah();

//memanggil method tampilkan_nama dari class buah
echo $buah->tampilkan_nama();

//memanggil method warna_kulit dari class buah
echo $buah->warna_kulit();
 ?>
