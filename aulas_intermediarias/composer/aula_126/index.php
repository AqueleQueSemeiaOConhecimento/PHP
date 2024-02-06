<?php

require_once('logger.php');

// testar o log

//logger('primeira mensagem');

secreta();

echo 'ok';

function secreta(){

    logger('Usuário entrouy na área secreta', 'warning');

    echo 'Entrou na área secreta!!';

}