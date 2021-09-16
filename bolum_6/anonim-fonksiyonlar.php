<?php
    $test = function($par){
        return 'test'." " .$par;
    };

    // echo $test("omer");

    $arr = [
        function(){
            return '1. fonksiyon';
        },
        function(){
            return '2. fonksiyon';
        },
        function(){
            return '3. fonksiyon';
        }

    ];
    //echo $arr[0](0,2);

    function filtrele($isim){
        return $isim . ' İmoriTech';
    }

    $arr = ["Ömer", "Faruk", "Çelenk", "Siltri"];
    // $arr = array_map('filtrele', $arr);
    $arr = array_map(function($isim){
        return $isim . " İmoriTech";
    }, $arr);

    print_r($arr)




?>

