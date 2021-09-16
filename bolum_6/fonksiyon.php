<?php

   function test(){
       return "test";
   }

   $a = test();
//    echo $a;

   function topla($sayi1 = 2, $sayi2 = 10){
       return ($sayi1+ $sayi2);
   }

   $toplam = topla(5, 12);
   $toplam2 = topla(5);
   $toplam3 = topla();


   echo $toplam . "<br>" . $toplam2 . "<br>" . $toplam3;

$ad = "Ömer";

   function adsoyad($soyad){
    //    global $ad;
       return $GLOBALS['ad'] . ' ' . $soyad;
   }

//    echo "<br>" . adsoyad('Çelenk')

   $yazi = "Ömer Faruk Çelenk Ömer Faruk ÇELENK";
   //echo "<br>" . substr($yazi, 0, 11). "..";
   function kisalt($str, $limit= 11 ){
       $karakterSayisi = strlen($str);
       if ($karakterSayisi > $limit){
           $str = substr($str, 0 , $limit) . '..';
       }
       return $str;
   } 

   echo kisalt($yazi, 19);
?>