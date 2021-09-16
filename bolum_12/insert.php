<?php
/*
    $sorgu = $db->prepare('INSERT INTO dersler SET 
    baslik = ?,
    icerik = ?,
    onay = ?
    ');

    $ekle = $sorgu->execute([
        'deneme baslik', 'icerik', 1
    ]);

    if ($ekle){
        echo 'verileriniz eklendi';
    } else {
        print_r($sorgu->errorInff());
    }

*/

    if (isset($_POST['submit'])){
        $baslik = isset($_POST['baslik']) ? $_POST['baslik']  : null;
        $icerik = isset($_POST['icerik']) ? $_POST['icerik']  : null;
        $onay = isset($_POST['onay']) ? $_POST['onay']  : 0;

        if ( !$baslik ){
            echo 'Başlık ekleyin';
        } elseif (!$icerik){
            echo 'İçeriği belirleyin';
        } else {
            // ekleme işlemi

            $sorgu = $db->prepare('INSERT INTO dersler SET 
                baslik = ?,
                icerik = ?,
                onay = ?
            ');

            $ekle = $sorgu->execute([
                $baslik, $icerik, $onay
            
            ]);

            if ($ekle){
                header('Location:http://localhost:8000/phpdersi/bolum_12/index.php');
            } else {
                print_r($sorgu->errorInff());
            }
        }
    }

?>

<form action="" method="POST">
    Başlık: <br>
    <input type="text"  name="baslik"> <br> <br>
    İçerik: <br>
    <textarea name="icerik" cols="30" rows="10"></textarea> <br>
    onay <br>
    <select name="onay" >
        <option value="1">Onaylı</option>
        <option value="0">Onaylı Değil</option>
    </select> <br> <br>

    <input type="hidden" name="submit" value="1">
    <button type="submit">Gönder</button>
</form>