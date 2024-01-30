<?php

// COOKIES - CRIAR UM COOKIE COM TEMPO DE VIDA

/*
O tempo de vida de um cookie é definido em segundos.

Vamos ver o exemplo de um cookie  que só tem 10 segundos de duração, e um que tem 1 ano.
*/

if(!isset($_COOKIE['visitou_o_site'])){
    // primeira visita
    setcookie('visitou_o_site', true, time() + 10);
    echo 'É a primeira visita ao site. Bem Vindo!';
}   else {
    // apresentar mensagem
    echo 'Você já esteve neste site na última hora. Seja bem vindo novamente';
}
