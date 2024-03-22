<?php


// dependences
require_once('./inc/config.php');
require_once('./inc/api_function.php');

// logica e regras de negocio


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

                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Telefone</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Nome do Cliente</td>
                            <td>Email do Cliente</td>
                            <td>Telefone do Cliente</td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
   </section>

<script src="assets/boststrap/bootstrap.bundle.min.js"></script>
</body>
</html>

