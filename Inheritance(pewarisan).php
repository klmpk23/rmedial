<?php

   //class parent
   class buah{
     
     //property class buah
     public $nama_buah;
     
     //method pada class buah
     function berinama($buah){
        $this-> nama_buah=$buah;
       
     }
     
   }
   
   //class turunan atau sub class dari class buah
   //kita menghubungkan class dengan syntax extends
   class warna extends buah{
   
   //property class warna 
   public $nama_warna;
   public $nama_buah;
  
  //method pada class warna
  function berinamawarna ($warna){
     $this->nama_warna=$warna;
  }
  
   }
   
   //instansiasi class warna
   $malasngoding = new warna;
   
   //method berinama
   $malasngoding->berinama("pisang");
   
   //method berinamawarna
   $malasngoding->berinamawarna("kuning");
   
   
   //menampilkan isi property
   echo " nama buah: " .$malasngoding->nama_buah;
   echo "    warna : " .$malasngoding->nama_warna;
   
   
 ?>
