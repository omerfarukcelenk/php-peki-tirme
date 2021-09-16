<?php
    $a = 5;

    switch($a):
        case 5:
            echo '5';
            break;
        case 4:
            echo '4';
            break;
        default:
            echo '3';
            break;            
    endswitch;

    $b = 5;

    if ($b == 5):
        echo '1';
    elseif($b == 6):
        echo '2';
    else:
        echo '3';
    endif;            
?>