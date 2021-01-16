<?php
   
   //class buah
   class buah{
     
     //property
     var $nama;
     var $warna;
     
     function _construct(){
         echo "ini adalah isi method construct</br>";
         
     }
     
     //method buah
     function tampilkan_nama(){
         return "buah ini bernama pisang dan berwarna kuning";
      }
         
     
     
   }
   //instansiasi class buah
   $buah = new buah();
   
   //memanggil method tampilkan_nama dari class buah
   echo $buah->tampilkan_nama();
 ?>
