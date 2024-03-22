<?php


// dependences
require_once('./inc/config.php');
require_once('./inc/api_function.php');


// logica e regras de negocio
$results = api_request('get_all_products', 'GET');

// analisar a informação obtida
if($results['data']['0']['status'] == 'SUCCESS')
{
    $produtos = $results['data']['0']['results'];
}
else {
    $produtos = [];
}


// printData($clientes);


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Consumidora - Produtos</title>
    <link rel="stylesheet" href="assets/boststrap/bootstrap.min.css">
</head>
<body>
    
   <?php include('inc/nav.php') ?>


   <section class="container">
        <div class="row">
            <div class="col">

                <div class="row">
                    <div class="col">
                        <h1>Clientes</h1>
                    </div>
                    <div class="col text-end align-self-center">
                        <a href="#" class="btn btn-primary btn-sm">Adicionar Produto...</a>
                    </div>
                </div>

                <hr>

                <?php if(count($produtos) == 0): ?>
                    <p class="text-center">Não existem produtos registrados.</p>
                <?php else: ?>

                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th width="50%" >Produto</th>
                            <th width="50%" class="text-end">Quantidade</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($produtos as $produto):?>

                        <tr>
                            <td><?= $produto['produto'] ?></td>
                            <td class="text-end"><?= $produto['quantidade'] ?></td>
                        </tr>

                        <?php endforeach; ?>
                    </tbody>
                </table>

                <p>Total: <strong> <?= count($produtos) ?> </strong> </p>
                <?php endif; ?>
                
                
            </div>
        </div>
   </section>

<script src="assets/boststrap/bootstrap.bundle.min.js"></script>
</body>
</html>

