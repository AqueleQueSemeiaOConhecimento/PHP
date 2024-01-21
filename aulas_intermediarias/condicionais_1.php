<?php

    // INSTRUÇÃO CONDICIONAIS DO PHP NO HTML

    $apresentar = true;

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Instruções Condicionias do PHP no HTML</title>
    </head>
    <body>
        
        <?php
            if($apresentar){
                echo '<p>Este parágrafo é para ser apresentado.</p>';
            } else {
                echo '<p>não existe nada para apresentar</p>';
            }
        ?>

        <?php if($apresentar): ?>
            <p>Este parágrafo é para ser apresentado.</p>
        <?php else: ?>
            <p>não existe nada para apresentar</p>
        <?php endif; ?>

    </body>
</html>