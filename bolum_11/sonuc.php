<?php
    // $_FILES

    function yukle($dosya, $boyutLimit = 5, $dosya_uzantilari = null){
        $sonuc = [];
        if ($dosya['error'] == 4) {
            $sonuc['hata'] = 'lütfen dosyanızı seçin.';
        } else{
            if (is_uploaded_file($dosya['tmp_name'])) {
                $gecerli_dosya_uzantilari = $dosya_uzantilari ? $dosya_uzantilari : [
                    "image/jpeg",
                    'image/png',
                    'image/gif'
                ];
                $gecerli_dosya_boyutu = (1024 * 1014 * $boyutLimit);
                $dosya_uzantisi = $dosya['type'];
    
                if (in_array($dosya_uzantisi, $gecerli_dosya_uzantilari)) {
                    if($gecerli_dosya_boyutu >= $dosya['size']){
    
                        $yukle = move_uploaded_file($dosya['tmp_name'], 'upload/'. $dosya['name']);
                        if($yukle){
                            $sonuc['dosya']  =  '<img src"upload/'.$dosya['name'].'">';
                        } else{
                            $sonuc['hata'] = 'Bir sorun oluştu dosyanız yüklenemedi';
                        }
    
                    }else{
                        $sonuc['hata'] = 'yükleyiceğiniz dosya en fazla 3MB olabilir';
                    }
                }else{
                    $sonuc['hata'] =  'Dosya sadece jpg, png ya da gif formatında olabilir';
                }
            }else{
                $sonuc['hata'] = 'dosya yüklenirken bir sorun oluştu';
            }
        }
        return $sonuc;
    }

    $sonuc = yukle($_FILES['dosya']);
    if (isset($sonuc['hata'])){
        echo $sonuc['hata'];
    } else {
        echo '<a href="'. $sonuc['dosya'] . '">Dosyayı Görmek İçin Tıklayın</a>';
    }

    
?>