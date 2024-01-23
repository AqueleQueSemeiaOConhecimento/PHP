<?php
    /*
    FILESYSTEM

    O processo mais linear para a gravação de textos num ficheiro é o seguinte:
        1. Criamos uma variável, também conhecida como um handle, que é um apontador
        para um ficheiro
        2. Escrevemos texto usando funções com esse apontador
        3. Fechamos o apontador
    */

$ficheiro = fopen('dados1.txt', 'w');

fwrite($ficheiro, 'Primeira frase.') . PHP_EOL;
fwrite($ficheiro, 'Segunda frase.');
fclose($ficheiro);

/*
    Ns instrução fopen, o segundo parâmetro (modo) pode ser definido de várias formas.
    As mais comuns são as seguinte:
    w - write -       Abre o ficheiro apenas para escrever.
                      Se o ficheiro não existe, cria-o se existe, apaga tudo.
    a - append -      Apenas para escrever.
                      Se o ficheiro não existe, cria-o,
                      Se existe, acrescenta o texto que ao que já existe no ficheiro

    Existem outros modos, como por exemplo de leitura.
*/