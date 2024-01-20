<?php

    $var = 'Eu acho que sou um cara legal';
    $pos = strpos($var, 'sou');
    // echo '<br>';
    echo $pos === false ? "Não existe" : $pos;