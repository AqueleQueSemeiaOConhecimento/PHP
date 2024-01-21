<?php 

    // PRINTF | SPRINTF | FPRINTF | VPRINTF | VSPRINTF | SSCANF | FSCANF 
    // -----------------------------------------------------------------

    /*
    Existe várias funções com terminologia muito semelhante cuja principal finalidade
    é o output, a gravação em stream ou retorno de strings formatadas de acordo com várias
    regras ou diretivas.

    Estas funções são particularmente complexas, porque contém um leque muito variado de
    possibilidades de formatação. Vamos olhar para o caso printf com alguns exemplos.
    */

    /*
    printf - Mostra uma string formatada (com um número variável de argumentos)
    sprintf - Retorna a string formatada
    vprintf - Mostra uma string formatada (mas um array de argumentos)
    sscanf - Interpreta a entrada de uma string de acordo com um formato
    fscanf - interpreta a leitura de um arquivo de acordo com um formato
    */

    // -----------------------------------------------------------------------
    // todas estas funções recorrem ao mesmo tipo de formatação, que veremos mais adiante.
    // ------------------------------------------------------------------------

    // podemos usar a função para simplismente fazer o output do texto.
    printf('Olá Mundo!');

    // substitui o %s pelo argumento em sequência.
    printf("O meu nome é %s e o meu apelido é %s", 'Matheus', 'Araújo' );

    // vamos ver aplicações mais avançadas;         
    $valor = 65;

    // apresenta o código binário do valor.
    printf("%b", $valor);


    // apresenta o caracter cujo código ASCII é indicado em $valor.
    printf("%c", $valor) . PHP_EOL;

    // American Standard Code for Information Interchange

    /*
    O valor é apresentado como um inteiro.
    Se o valor for uma string alfanumérica, vai dar zero. Se for uma string com valor numérico,
    apresenta o número.
    */
    printf("%d", $valor);
    
    $valor = 'bola';
    printf("%d", $valor);