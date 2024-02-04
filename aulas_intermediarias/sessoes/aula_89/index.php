<?php
session_start();

$_SESSION['valor_index'] = 'index';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 89</title>
</head>
<body>
    
    <h3>Página inicial</h3>
    <?php if(isset($_SESSION['valor_servicos'])):  ?>
    <p> <?= $_SESSION['valor_servicos'] ?> </p>
    <?php endif; ?>
    <a href="servicos.php">Serviços</a>

</body>
</html>