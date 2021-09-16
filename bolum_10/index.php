<?php
    session_start();
    ob_start();
    require 'ayarlar.php';

    if(isset($_SESSION['zaman']) && time() > $_SESSION['zaman']){
        session_destroy();
        header('Location:/phpdersi/bolum_10/oturum_sonlandi.php');
    } else {
        $_SESSION['zaman'] = time() + 10;
    }

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        if (isset($_SESSION['kullanici_adi'])){
            include 'admin.php';
        } else{
            include 'giris.php';
        }

    ?>
    
    
</body>
</html>