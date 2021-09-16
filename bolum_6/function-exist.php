<?php

    function test(){
        return 'test';
    }

    if (function_exists('test')){
        echo 'Test fonks. vardır';
    }else{
        echo 'Test fonks. yoktur';

    }
    function kisalt($str, $limit= 11 ){
        $karakterSayisi = strlen($str);
        if ($karakterSayisi > $limit){
            if(function_exists('mb_substr')){
                $str = substr($str, 0 , $limit, 'utf-8') . '..';
            }else {
                $str = substr($str, 0 , $limit) . '..';
            }
        }
        return $str;
    } 

?>