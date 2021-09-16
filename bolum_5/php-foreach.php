<?php

    $sayilar = [1,2,3,4,5,6,7,8,9,10];

    foreach($sayilar as $sayi){
        echo $sayi . "<br>";
    }

    $uyeDetay = [
        'ad' => "Ömer",
        'ikinciAd' => "Faruk",
        'soyAd' => "Çelenk",
        'yas' =>  21
    ];

    foreach($uyeDetay as $key => $value){
        echo $key . ": ". $value . "<br>";
    }

?>