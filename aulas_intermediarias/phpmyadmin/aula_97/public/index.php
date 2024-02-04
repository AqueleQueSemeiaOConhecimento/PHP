<?php

require_once '../config.php';

// definição da ligação

$gestor = new PDO(
    "mysql:host=" . MYSQL_HOST . ";" .
    "dbname=" . MYSQL_DATABASE . ";charset=utf8",
    MYSQL_USER,
    MYSQL_PASS
);
//obs:charset=utf8 é uma caracterisca para pegar caracteres especiais

// pego todos os dados da tabeka cliente
$dados = $gestor->query("SELECT * FROM cliente");

// coloco os dados na forma de um array associativo
$clientes = $dados->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apresentar dados da base de dados com o PHP e HTML</title>
</head>

<body>

    <h3>CLIENTES</h3>
    <hr>
    <table border="1">
        <thead>
            <tr>
                <th>ID_cliente</th>
                <th>Nome</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($clientes as $cliente) : ?>

                <tr>
                    <td> <?= $cliente['id_cliente'] ?> </td>
                    <td> <?= $cliente['nome_cliente'] ?> </td>
                </tr>

            <?php endforeach; ?>

        </tbody>
    </table>
    <br>

    <p>Total clientes: <strong><?= count($clientes) ?></strong> </p>
</body>

</html>