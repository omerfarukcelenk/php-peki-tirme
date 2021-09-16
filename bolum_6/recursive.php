<?php

    function say($sayi){
        echo $sayi ;
        if($sayi < 10){
            say($sayi + 1);
        }
    }
    
    // say(1);

    $kategoriler = [
        [
            'id' => 1,
            'parent' => 0,
            'ad' => "İmoriTech",
        ],
        [
            'id' => 2,
            'parent' => 0,
            'ad' => "Arialist",
        ],
        [
            'id' => 3,
            'parent' => 0,
            'ad' => "Bonybon",
        ],
        [
            'id' => 4,
            'parent' => 1,
            'ad' => "Flutter Dersleri",
        ],
        [
            'id' => 5,
            'parent' => 1,
            'ad' => "PHP Dersleri",
        ],
        [
            'id' => 6,
            'parent' => 4,
            'ad' => "State Mannegment",
        ],
        [
            'id' => 7,
            'parent' => 4,
            'ad' => "Dart Temelleri",
        ],
        [
            'id' => 8,
            'parent' => 6,
            'ad' => "Scaffold Nedir",
        ],

    ];

    function kategoriListele($kategoriler, $parent =0){
        $html = '';
        $html .= '<ul>';
        foreach($kategoriler as $kategori){
            if ($kategori['parent'] == $parent) {
                $html .= "<li>". $kategori['ad'] ;
                $html .= kategoriListele($kategoriler, $kategori['id']);
                $html .= "</li>";
            }
        }
        $html .= '</ul>';
        return $html;

    }

    // echo kategoriListele($kategoriler);

    $arr = [
        'ad' => "Ömer",
        "Soyad" => "Çelenk",
        "Diller" => [
            "dart" => "Evet",
            "python" => "Evet",
            "Web Dilleri" => [
                "Javascript" => "Evet",
                "type-Script" => "Hayır",
            ]
        ]
    ];
    
    function dizide_bul($dizi, $anahtar) {

        foreach($dizi as $key => $val){
            if ($key == $anahtar) {
                return $val;
            }
            if(is_array($val)){
                $sonuc = dizide_bul($val, $anahtar);
                if ($sonuc) {
                    return $sonuc;
                }
            }
        }
        return false;

    }        

    echo dizide_bul($arr, "python");

?>