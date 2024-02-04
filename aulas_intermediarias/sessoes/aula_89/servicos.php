<?php
session_start(); 

$_SESSION['valor_servicos'] = 'serviços';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h3>Página Serviços</h3>
    <?php if(isset($_SESSION['valor_index'])):  ?>
    <p> <?= $_SESSION['valor_index'] ?> </p>
    <?php endif; ?>
    <a href="index.php">Voltar</a>

</body>
</html>