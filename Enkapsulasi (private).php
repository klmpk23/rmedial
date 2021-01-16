<?php
   //claas buah
   class buah{
     //menentukan property dengan private
     private $nama = "semangka";
     
     //method public
     public function tampilkan_nama(){
       return " buah ini bernama " .$this->nama;
       
     }
     
   }
   //instansiasi class buah
   $buah = new buah();
   
   //memanggil method public tampilkan_nama dari class buah
   echo $buah->tampilkan_nama();

 ?>
