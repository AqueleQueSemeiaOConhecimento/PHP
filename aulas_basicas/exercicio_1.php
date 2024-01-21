<?php
# 'a' é igual a 100
# apresentar o valor de 'a'

$a = 100;
echo $a;
echo '<br>'; # quebra de linha



# 'a' é igual a 1000 e 'b' é igual a metade de 'a'
# qual o valor de 'b'?

$a = 1000;
$b = $a/2;
echo $b;
echo "<br>";



# 'a' é igual a 100 e 'b' é igual a 3 vezes o valor de 'a'
# apesentar o valor de 'b'

$a = 100;
$b = $a * 3;
echo $b;
echo "<br>";



# 'a' é iniciado e apresentado com o valor 20.
# na instrução seguinte, 'a' deverá ser apresentado com o valor 21.

echo $a = 20;
echo "<br>";
echo ++$a;
echo "<br>";



# 'a' é igual a 100
# 'b' é igual a 250
# 'c' é igual a 'a' mais 'b'
# acrescentar mais uma unidade a 'c'
# apresentar 'c'

# resultado será 351

$a = 100;
$b = 250;
$c = $a + $b;
echo  ++$c;
echo "<br>";