<?php

// CICLOS DE PHP NO HTML

/*

    A escrita de código PHP deve ser o mais simples possível para facilitar 
    a leitura do flux. Por outro lado, devemos procurar criar condições
    para rapidamente alterar o aspecto visual dos dados que apresentamos.

*/

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <title>Ciclos de PHP no HTML</title>

        <style>
            .cor{
                color: red;
            }
            .cor2{
                color: blue;
            }
        </style>
    </head>
    <body>
        
            <?php
            // usando só PHP
            for($i=0; $i < 100; $i++) echo "<p class=\"cor\">$i</p>";
            ?>        

            <hr>

            <!-- html + phh -->
            <?php for ($i = 100; $i < 120; $i++): ?>
                <p class="cor"><?= $i?></p>
            <?php endfor; ?>

            <hr>

            <!-- //////////////////////////////////////////////////////////// -->

            <!-- Apresentar os nomes da lista -->

            <?php
                echo '<ul>';
                foreach($nomes as $nome){
                    echo "<li>$nome</li>";
                }
                echo '</ul>';
            ?>

            <!-- --------------- --> 

            <ul>
                <?php foreach($nomes as $nome): ?>
                    <li><?= $nome ?></li>
                <?php endforeach; ?>
            </ul>

    </body>
</html>