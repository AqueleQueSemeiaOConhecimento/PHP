<?php


// dependences
require_once('./inc/config.php');
require_once('./inc/api_function.php');
require_once('inc/functions.php');

// logica e regras de negocio
$results = api_request('get_all_clients', 'GET');

// analisar a informação obtida
if($results['data']['0']['status'] == 'SUCCESS')
{
    $clientes = $results['data']['0']['results'];
}
else {
    $clientes = [];
}


// printData($clientes);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Consumidora - Clientes</title>
    <link rel="stylesheet" href="assets/boststrap/bootstrap.min.css">
</head>
<body>
    
   <?php include('inc/nav.php') ?>

   <section class="container">
        <div class="row">
            <div class="col">

                <h1>Clientes</h1>
                <hr>

                <?php if(count($clientes) == 0): ?>
                    <p class="text-center">Não existem clientes registrados.</p>
                <?php else: ?>

                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Telefone</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($clientes as $cliente):?>

                        <tr>
                            <td><?= $cliente['nome'] ?></td>
                            <td><?= $cliente['email'] ?></td>
                            <td><?= $cliente['telefone'] ?></td>
                        </tr>

                        <?php endforeach; ?>
                    </tbody>
                </table>

                <?php endif; ?>
                
                
            </div>
        </div>
   </section>

<script src="assets/boststrap/bootstrap.bundle.min.js"></script>
</body>
</html>

