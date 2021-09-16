<?php
    // dosya oluşturma
    // touch()

    // touch('test.txt');
    touch('test2.txt', time() - 84000);

    /*

        Kipler:
            r- okumak için aç
            r+ okumak ve yazmak için aç
            w- yazmak için aç (dosya yok ise oluşturu ve üstüne yazar)
            w+ okumak ve yazmak için aö
            a- yazmak için aç
            a+ okumak ve yazmak için aç

    */

    /* 
        fopen()
        fclose()
        fwrite()
        fread()
        fgets() -- satır okuma
        feof() - dosyanın sonuna gelinip gelmediğine döndürür
        filesize()
        unlink() dosyayı siler
    */
    $icerik = 'Bu da 3. içeriktir :/' .  rand(0, 10000) . "\n";

    $dosya = fopen('test.txt', 'a+');
    // fwrite($dosya, $icerik);
    // fwrite($dosya, $icerik);
    // echo filesize('test.txt') . '<br>';
    // echo fread($dosya, filesize('test.txt'));



    // while (!feof($dosya)){
    //     // echo fgets($dosya) . '<br>';
    // }

    // print_r(feof($dosya));

    // $degerler = file('test.txt');
    // print_r($degerler);

    fclose($dosya);

    // unlink('test2.txt');

    /*
        file_get_contents()
        file_put_contents()
    */

    // $icerik = file_get_contents('test.txt');

    // echo $icerik;

    file_put_contents('test.txt', 'bu yeni değer' ,FILE_APPEND);
?>