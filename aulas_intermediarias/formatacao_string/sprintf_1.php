<?php

    # PERCEBENDO O FORMATO DE SPRINTF - PARTE 1

    /*
    A função sprintf retorna uma string formatada de acordo com um determinando formato
    Percebendo como funciona a definição desse formato, ficaremos a perceber como
    funciona o formato para as outras funções referidas no vídeo anterior.

    Esta é a assinatura da função:
    sprintf ( string $format, mixed ..$values) : string

    O $format (formato) é uma string comsposta de diretivas.
    As diretivas são constituídas por caracteres que são copiadas diretamente
    para o resultado da string e por especificações de conversão, cada umas das quais
    com outputs distintos.

    As especificações de conversão seguem a seguinte filosofia:

            $[argnum$][flags][.precision]specifier

    */
    

    $localizacao = 'da sala';
    $total_pessoas = 123;

    // %s transforma-se num parametro de string
    echo sprintf("Existem %s pessoas dentro %s", $total_pessoas, $localizacao);

    // %d trata o argumento como um valor numérico
    echo sprintf("Existem %d pessoas dentro %s", $total_pessoas, $localizacao);

    // Se a ordem dos argumentos for alterada, podemos usar o %1, %2, etc. Para
    // identificar qual o argumento, seguido de $ e o tipo de output pretendido.
    echo sprintf('Dentro %2$s foram encontrados %1$d pessoas', $total_pessoas, $localizacao);

    // Podemos, inclusive, fazer várias referência a cada um dos valores.
    echo sprintf('Dentro %2$s foram encontrados %1$d pessoas. %1$d é a capacidade máxima %2$s.', $total_pessoas, $localizacao);

    // a utilização do ' apóstrofe define o padding do caracter imediatamente seguinte.
    // logo após o caracter escolhido, definimos o número de repetições desse caracter
    // e depois o especificador que determina como vai ser tratado o valor do argumento.
    echo sprintf("Capacidade:%'-10d", $total_pessoas);

    // A expressão seguinte irá acrescentar lead-zeros ao número de pessoas.
    echo sprintf('Dentro %2$s estão %1$08d pessoas', $total_pessoas, $localizacao);