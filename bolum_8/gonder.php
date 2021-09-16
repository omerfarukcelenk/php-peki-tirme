<?php
    // $_POST

    // print_r($_POST);

    // echo $_POST['ad'];

    // strip_tags()
    // htmlspecialchars()
    // trim
    /*
    if (trim($_POST["hakkimda"]) == '') {
        echo 'lütfen hakkınızda birşeyler yazın';
    }else{
        print_r($_POST);
    }
    */

    // echo strip_tags($_POST['hakkimda']);
    // $hakkimda = htmlspecialchars($_POST['hakkimda']);

    // echo htmlspecialchars_decode($hakkimda);
    
    function formFiltrele($post){

        return is_array($post) ?   array_map('formFiltrele',$post) : htmlspecialchars(trim($post));
    }

    $_POST = array_map('formFiltrele',$_POST);

    function post($name){
        if (isset($_POST[$name])){
            return $_POST[$name];
        }
    }

     echo post('test');
