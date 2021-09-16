<?php

    $a = 7;


    switch ($a) {
        case 5:
            echo "5'e eşit";
            break;
        case 6:
            echo "6'e eşit";
            break;
        case 7:
            echo "7'e eşit";
            break;    
        case $a % 4 == 3:
            echo '7 yi 4 e bölünce kalan 3tür';
        default:
            echo 'Hiçbir şeye eşit değil';
            break;
    }
