<?php

if (!isset($_GET['id']) || empty($_GET['id'])) {
    header('Location:http://localhost:8000/phpdersi/bolum_12/index.php');
    exit;
}

$sorgu = $db->prepare('SELECT * FROM dersler WHERE id = ?');
$sorgu->execute([
    $_GET['id']
]);
$ders = $sorgu->fetch(PDO::FETCH_ASSOC);

if (!$ders) {
    header('Location:http://localhost:8000/phpdersi/bolum_12/index.php');
    exit;
}

if (isset($_POST['submit'])) {
    $baslik = isset($_POST['baslik']) ? $_POST['baslik']  : $ders['baslik'];
    $icerik = isset($_POST['icerik']) ? $_POST['icerik']  : $ders['icerik'];
    $onay = isset($_POST['onay']) ? $_POST['onay']  : $ders['onay'];

    if (!$baslik) {
        echo 'Başlık ekleyin';
    } elseif (!$icerik) {
        echo 'İçeriği belirleyin';
    } else {

        $sorgu = $db->prepare('UPDATE dersler SET baslik = ?, icerik = ?, onay = ? WHERE id = ?');
        $guncelle = $sorgu->execute([
            $baslik, $icerik, $onay, $ders['id']
        ]);

        if ($guncelle) {
            header('Location:http://localhost:8000/phpdersi/bolum_12/index.php?sayfa=oku&id=' . $ders['id']);
        } else {
            echo 'Güncelleme işlemi başarısız';
        }
    }
}

/*
    $sorgu = $db->prepare('UPDATE dersler SET baslik = ?, icerik = ?, onay = ? WHERE id = ?');
    $guncelle = $sorgu->execute([
        'yeni başlık', 'yeni içerik', 1, 3
    ]);

    if ($guncelle){
        echo 'güncelleme işlemi başarılı';
    } else {
        echo 'Güncelleme işlemi başarısız';
    }
    */
?>

<form action="" method="POST">
    Başlık: <br>
    <input type="text" value="<?php echo isset($_POST['baslik']) ? $_POST['baslik'] : $ders['baslik'] ?>" name="baslik"> <br> <br>
    İçerik: <br>
    <textarea name="icerik" cols="30" rows="10"><?php echo isset($_POST['icerik']) ? $_POST['icerik'] : $ders['icerik'] ?></textarea> <br>
    onay <br>
    <select name="onay">
        <option <?php echo $ders['onay'] == 1 ? "selected" : "" ?> value="1">Onaylı</option>
        <option <?php echo $ders['onay'] == 0 ? "selected" : "" ?> value="0">Onaylı Değil</option>
    </select> <br> <br>

    <input type="hidden" name="submit" value="1">
    <button type="submit">Güncelle</button>
</form>