<?php

   // range(0, 10000)
   function byteToMb($byte){
    return  number_format($byte / 1048576, 2);
} 
$sayilar = range(0, 1000);
echo byteToMb(memory_get_usage()) . ' Mb bellek kullanıldı' . '<br>';

    function say($baslangic, $limit)
   {
       $arr = [];
       for( $i = $baslangic; $i <= $limit; $i++){
           yield $i;
       }
   }
/*
   $sayilar = say(0, 100);
   foreach( $sayilar as $sayi){
       echo $sayi . '<br>';
   }
*/

  

    
    echo byteToMb(memory_get_usage()) . ' Mb bellek kullanıldı';

?>