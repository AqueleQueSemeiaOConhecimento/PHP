<?php

/*


1. Crie um script index.php
2. Defina duas variáveis: o seu nome e o seu apelido
3. Numa estrutura básica de HTML, apresente um título estático do tipo h3
    com o texto "O meu nome é:"
4. Apresenta numa tag h1 o nome completo a partir das variáveis iniciadas no ponto 2


*/
$nome = 'Matheus';
$apelido = 'Pintudo';

?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset = "utf-8">
    <title>Exercicio_2</title>
</head>
<body>
    
    <h3>O meu nome é:</h3>
    <h1><?php echo "$nome $apelido"; ?></h1>
</body>
</html>

