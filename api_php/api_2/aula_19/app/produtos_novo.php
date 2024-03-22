<?php

$error_message = '';
$success_message = '';

// dependences
require_once('./inc/config.php');
require_once('./inc/api_function.php');
require_once('inc/functions.php');

// logica e regras de negocio
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $produto = $_POST['text_produto'];
    $quantidade = $_POST['text_quantidade'];

    // endpoint é a chamada do metodo do obj
    // o method sera post ou get
    // variables serao os argumentos passados pra função
    $results = api_request('create_new_product', 'POST', [
        'produto' => $produto,
        'quantidade' => $quantidade
    ]);


    // Apresenta o resultado da operação na API

    if($results['data']['0']['status'] == 'ERROR'){
        $error_message = $results['data']['0']['message'];

    } 
    elseif($results['data']['0']['status'] == 'SUCCESS'){
        $success_message = $results['data']['0']['message'];
    }

}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Consumidora - Novo cliente</title>
    <link rel="stylesheet" href="assets/boststrap/bootstrap.min.css">
</head>
<body>

   <?php include('inc/nav.php') ?>

   <section class="container">
        <div class="row my-5">
            <div class="col-sm-6 offset-sm-3 bg-light p-4">

            <form action="produtos_novo.php" method="POST">

                <div class="mb-3">
                    <label>Nome do produto:</label>
                    <input type="text" name="text_produto" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Quantidade:</label>
                    <input type="number" name="text_quantidade" class="form-control">
                </div>

                <div class="mb-3">
                    <a href="produtos.php" class="btn btn-secondary btn-sm">Cancelar</a>
                    <input type="submit" value="Guardar" class="btn btn-primary btn-sm">
                </div>

                <?php if(!empty($error_message)):?>

                <div class="alert alert-danger p-2 text-center">
                    <div>
                        <?= $error_message ?>
                    </div>
                </div>

                <?php elseif(!empty($success_message)): ?>

                <div class="alert alert-success p-2 text-center">
                    <div>
                        <?= $success_message ?>
                    </div>
                </div>

                <?php endif; ?>

            </form>

            </div>
        </div>
    </section>

<script src="assets/boststrap/bootstrap.bundle.min.js"></script>
</body>
</html>


