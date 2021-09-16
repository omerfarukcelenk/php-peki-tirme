<?php 

    /* 
        Veri Türleri (Data Types):
            String => "Ömer" 'Ömer'
            Integer => 500, 300
            Float(double) => 6.5, 5.112
            Boolen => (true, false)
            Array(Dizi) 
            Object (Nense)
            NULL
        gettype() => veri türünü öğrenmek için kullandık    
    */

    $string = "Tayfun erbilen";
    $int = 500;
    $float = 50.4;
    $bool = false;
    $array = array();
    $object = new stdClass;
    $null = null;
    echo gettype($null);

?>