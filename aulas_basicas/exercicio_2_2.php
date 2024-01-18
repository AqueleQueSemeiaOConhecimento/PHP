<?php 

/*

1. Crie um fichei index.php
2. Defina duas variáveis: nome e apelido
    (ambas deverão ter texto com letra minúsculas)
3. Numa página HTML simples, apresente o seguinte texto dentro de um parágrafo:

O meu nome é NOME  e o meu apelido é APELIDO.

*/

    $nome = "Matheus";
    $apelido = "Pintudo";

    $nome_uper = strtoupper($nome);
    $apelido_uper = strtoupper($apelido);

    //Caso meu nome tiver assento devo usar a função mb_strtoupper() da biblioteca mbstring

    # Exemplo:

    // $nome = "João";   
    // $nome_upper = mb_strtoupper($nome);

?>

<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="author" content = "Matheus Araújo">
        <title>Exercicio String 2.2</title>
    </head>
    <body>
        <p><?php echo "O meu nome é $nome_uper e o meu apelido é $apelido_uper." ?></p>
    </body>
</html>