<?php

// VARIÁVEIS
// ===============================================================================================

# São usadas para guardar dados: números, textos, etc.
# Podemos apresentar e modificar os seus valores ao longo do código

# definem-se com um dollar ($) e um identificador (nome da variável)
$variavel;







# Podemos definiar  iniciar uma variável
// $variavel = 100;

# Podemos alterar o tipo de valores de uma variável
// $variavel = "teste;

$variavel = 100;
echo $variavel;

## TIPOS DE DADOS
# ============================================

# as variáveis em PHP podem ter diferentes tipos de valores
# a mesma variável pode ter tipos diferentes de valores

$variavel = 100;
$variavel = "cem";

# apesar de serem variáveis de tipo implicito, é importante saber:

$inteiro = 100;           # int
$float = 10.5;            # float
$bool = true;             # verdadeiro ou falso
$string = "olá mundo";    # string (cadeia de caracteres)
$array = [1,2,3];         # Array - coleção de valores
#$pessoa = new Pessoa();   # Objeto com propriedade e métodos
$nulo = null;             # variável com valor nulo