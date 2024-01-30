<?php

# COOKIES - COMO REMOVER UM COOKIE

/*
Imaginem um cenário em que criámos um cookie com uma validade de 1 ano.
Numa atualização do nosso site, queremos que esse cookie deixe de existir 
na próxima visita.
*/

# Vamos criar o cookie primeiro
// setcookie('leu_as_condicoes', true, time() + (365*24*60*60), '/');


    // verificamos se o cookie existe
    if(isset($_COOKIE['leu_as_condicoes'])){
        setcookie('leu_as_condicoes', null, -1, '/');
        echo '<p>Cookie eliminado</p>';
    }


echo '<p>terminado</p>';