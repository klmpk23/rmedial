<?php
   //class buah
   class buah{
     //prop
      public $nama;
      public $warna;
      
      //method buah
      function tampilkan_nama(){
        return "jeruk ini berwarna orange";
        
      }
      
      
   }
   
   //instansiasi class buah
   $buah = new buah();
   
   //memanggil method tampilkan_nama dari class buah
   echo $buah->tampilkan_nama();
 ?>
