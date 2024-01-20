<?php

    /*
    ECHO
    
    É a instrução mais usada para apresentar conteúdo PHP numa página web.
    Também podemos usar o print, mas é ligeiramente mais lento e tem menos potencial.
    Podemos usar o echo com ou sem parêntisis (é uma construção especial do PHP)
    Pode ser usado com múltiplos parâmetros.

    */

?>

<?php
    $nome = "João";
    $apelido = "Ribeiro";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <meta name="author" content="Matheus Araújo">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formas de usar o comando ECHO em PHP</title>

        <style>
            .texto-vermelho {
                color:red;
            }
        </style>
    </head>
    <body>
        

            <?php echo $nome . ' ' . $apelido ?> <br>

            <?php echo "$nome $apelido" ?> <br>

            <?php echo $nome, " ", $apelido ?> <br>

            <?php echo "<h3>$nome $apelido</h3>" ?> <br>

            <?php echo "<h1 class=\"texto-vermelho\">$nome $apelido</h1>" ?>

            <p>Nome do cliente: <strong><?php echo "$nome $apelido" ?></strong></p>

            <p><?php echo substr($apelido,0,4)?></p>

    </body>
</html>