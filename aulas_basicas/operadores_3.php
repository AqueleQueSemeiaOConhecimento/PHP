<?php

# OPERADORES DE COMPARAÇÃO
# Permitem efetuar uma comparação entre valores.
# Verificam se os valores são iguais, diferentes, maiores ou menores, ou do mesmo tipo
# são valores chamados de booleanos

# O resultado da comparação será sempre o valor
# verdadeiro (true)
# ou
# falso (false)

# EXEMPLOS:
# valores são iguais?

$a = (2==3);          # false
$a = (100 == 100);    # true
$a = (50 == '50');    # true
$a = (50 === '50');   # false

// dois sinais de igual '==' significa comparação so que converte texto pra alfanumerico ou vice e verso.
// três sinais de igual '===' significa comparação mas verifica valor e tipo.






# valores são diferentes?
$a = (2 != 3);              # true
$a = (2 <> 3);              # true (alternativo)
$a = (50 != 50);            # false
$a = (50 != '50');          # false
$a = (50 !== '50');         # true

# operadores de comparação com 3 simbolos, comparam valor e tipo de valor
# ===
# !==





# valores são maiores ou menores?
$a = (2 > 3);             # false
$a = (2 < 3);             # true
$a = (50 >= 50);          # true
$a = (50 <= 50);          # true
$a (50 < 50);             # false




# No PHP 7 foi adicionado um novo operador de comparação
# designado por saceship operator (Tie Fighter do Star Wars)


#               <=>

$x = 1 <=> 1;       # 0 (1 == 1)
$x = 3 <=> 2;       # 1 (3 > 2)
$x = 1 <=> 2;       # -1 (1 < 2)

// COMPARA SE É IGUAL, MAIOR OU MENOS.
# 0 Igual
# 1 Maior
# -1 Menor