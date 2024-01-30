<?php

# PASSAR VALORES ENTRE PÁGINAS WEB - VIA GET

/*
Todo o cuidado é pouco quando passamos variáveis por query string.
Vejamos uma situação que pode comprometer a nossa página e como solucionar o problema.
*/

# Pagina1 - temos html e link para pagina2
// <a href="pagina2?nome=joao"> Ir pagina 2 </a>

# Pagina2 - Recebe o dado com um caracter especial
/*
<?php
    $nome = htmlspecialchars($_GET['nome']);
?>
*/