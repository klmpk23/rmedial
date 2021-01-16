<?php
   //class buah
   class buah{
     //property
     var $nama;
     var $warna;
     
     //method construct di jalankan pertama kali
     function _construct(){
         echo "ini adalah mangga";
    
     }
     
     
     //method destruct di jalankan terakhir 
     function _destruct(){
       echo "ini adalah apel</br>";
   
     }
     
     //method buah
     function tampilkan_nama(){
         return "ini adalah mangga dan apel";
       
     }
     
   }
   //instansiasi class buah
   $buah = new buah();
   
   //memanggil method tampilkan_nama dari class buah
   echo $buah->tampilkan_nama();
 ?>
