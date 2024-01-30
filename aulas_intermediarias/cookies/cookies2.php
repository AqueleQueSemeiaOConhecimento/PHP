<?php

// COOKIES - CRIAR UM COOKIE COM TEMPO DE VIDA

/*
Na maior parte dos casos, os cookies são criados para deixarem no cliente um
registro que pode ser posteriormente utilizado. Vejamos um exemplo de como criar
um cookie para o nosso domínio e que vai ser usado numa próxima visita.
*/

if(!isset($_COOKIE['visitou_o_site'])){
    // primeira visita
    setcookie('visitou_o_site', true, time() + 3600);
    echo 'É a primeira visita ao site. Bem vindo!';
}
else {
    // apresentar mensagem
    echo 'Você já esteve neste site na última hora, Seja bem-vindo novemante.';
}
