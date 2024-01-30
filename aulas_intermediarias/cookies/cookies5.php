<?php

// COOKIES - COMO ALTERAR O VALOR DE UM COOKIE

/*
É importante perceber que não existe uma função prática e direta para perceber quando é 
que um cookie vai expirar. Da mesma forma, não existe uma forma direta para alterar um 
valor de um cookie sem ter que o "refazer" novamente.
*/

# Criar o cookie
# setcookie('minha_opcao', 10, time() + (365*24*60*60), '/');

# alterar o valor do cookie
/*
if(isset($_COOKIE['minha_opcao'])){
    setcookie('minha_opcao', 1000, time() + (365*24*60*60), '/');
    echo '<p>Cookie alterado</p>';
}
*/

 echo '<p>terminado</p>';