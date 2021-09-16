<?php
    try{
        $db = new PDO('mysql:host=localhost;dbname=dersler', 'root' , '965787');
    } catch (PDOException $e){
        echo $e->getMessage();
    }
?>