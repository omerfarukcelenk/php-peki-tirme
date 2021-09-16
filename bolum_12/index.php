<?php
    require_once 'baglan.php';

    if (!isset($_GET['sayfa'])) {
        $_GET['sayfa'] = 'index';
    }

    Switch ($_GET['sayfa']){
        case 'index':
            require_once 'homepage.php';
            break;
        case 'insert';
            require_once 'insert.php';
            break;
        case 'oku':
            require_once 'oku.php';
            break;    
    }
?>