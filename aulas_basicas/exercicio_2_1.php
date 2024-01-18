<?php
/*


1. Crie um ficheiro index.php
2. Defina as variáveis nome e apelido com os respectivos valores.
3. Apresente o nome completo num parágrafo de HTML
4. No segundo parágrado apresente o seguinte:
    O meu nome tem x caracteres.
    Sendo x o cálculo do total de caracteres do seu nome.


*/

    $nome = 'Matheus';
    $apelido = 'Pintudo';
    $nome_completo = "$nome $apelido";

    $c = strlen($nome_completo);

    // Quando vamos calcular nomes com acento nao usaramos função strlen()
    // Usamos a função mb_strlen()
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Matheus Araújo">
    <title>Exercicio com String 2.1</title>
</head>
<body>
    
    <p><?php echo "$nome_completo"; ?></p>

    <p><?php echo "O meu nome tem $c caracteres."?></p>

</body>
</html>
