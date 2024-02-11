<?php

    require_once('./recursos/config.php');

    try{
         $pdo = new PDO(
             "mysql:host=" . MYSQL_HOST .
             ";dbname=" . MYSQL_DATABASE .
             ";charset=" . CHARSET .
             ";user=" . MYSQ_USER .
             ";password=" . MYSQ_PASS
         );


        //echo 'conexão feita';
    }

    catch(PDOException $e){
        echo 'Erro de conexão: ' . $e->getMessage() . '<br>';
    }