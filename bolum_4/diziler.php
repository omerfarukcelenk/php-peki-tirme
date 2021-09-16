<?php

    $ad = "Ömer";
    $ikinciAd = "Faruk";
    $soyAd = "Çelenk";
    $meslek = "Geliştirici";
    $yas = 21;

    /*
        Dizi Tanımlama:
            1-Array
            2- []
    */

    $kimlik = array(
        'ad' => "Ömer",
        'ikinciAd' => "Faruk",
        'soyAd' => "Çelenk",
        'meslek' => "Geliştirici",
        'yas' =>  21
    );

    $kimlik2 = [
        'ad' => "Siltri",
        'ikinciAd' => "01",
        'soyAd' => "İmoriTech",
        'meslek' => "Şirket",
        'yas' =>  1
    ];
    /*
        Dizi İçindeki Elemanlara Erişmek
            - print_r()
    */
    // print_r($kimlik);

    // echo $kimlik['ad'];
    // print_r($kimlik2);

    /* 
        Siteler 
            E-ticaret
                Sahibinden
                N11
                HepsiBurada
                GittiGidiyor
            Eğitim
                Udemy
                Prototurk
                93academy    
    */

    $kategoriler = [
        'siteler' => [
            'e-ticaret' => [
                "Sahibinden",
                "N11",
                "HepsiBurada",
                "GittiGidiyor"
            ],
            'Egitim' => [
                "Udemy",
                "Prototurk",
                "93academy"
            ]
        ]
    ];

    // echo $kategoriler['siteler']['e-ticaret'][0];
    // print_r($kategoriler);

    define('UYE', [
        'ad' => "Ömer",
        'ikinciAd' => "Faruk",
        'soyAd' => "Çelenk",
        'meslek' => "Geliştirici",
        'yas' =>  21
    ]);
    echo print_r(UYE);

?>