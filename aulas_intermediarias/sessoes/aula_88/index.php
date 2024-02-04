<?php

/*
SESSIONS (SESSÕES)

É um mecanismo ou forma que permite guardar dados enre vários requests.
Permite construir aplicações com informação que está disponível em todas
as páginas da nossa aplicação ou website.
*/

session_start();
echo 'SESSÕES';

$_SESSION['valor'] = 1000;
$_SESSION['user'] = 'Matheus';