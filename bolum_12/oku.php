<?php require 'header.php'?>

<?php

    if (!isset($_GET['id']) || empty($_GET['id']) ){
        header('Location:http://localhost:8000/phpdersi/bolum_12/index.php');
        exit;
    }

    $sorgu = $db->prepare('SELECT * FROM dersler WHERE id = ? && onay = 1');
    $sorgu->execute([
        $_GET['id']
    ]);
    $ders = $sorgu->fetch(PDO::FETCH_ASSOC);

    if (!$ders){
        header('Location:http://localhost:8000/phpdersi/bolum_12/index.php');   
        exit;
    }

    print_r($ders);

?>

<h3>    <?php   echo $ders['baslik']  ?>    </h3>

<div>
<Strong>Yayın tarihi</Strong>  <Strong> <?php echo $ders['tarih'] ?> </Strong> <br> 
<?php   echo $ders['icerik']  ?>

</div>
