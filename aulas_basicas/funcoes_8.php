<?php

    /*
    GENERATORS

    Um gerador é uma função que permite gerar séries de valores.
    Cada valor é devolvido pela função através da instrução yield.
    Ao contrário do return, a instrução yield guarda o estado da função
    permitindo que a função continue a partir do estado onde ficou na última chamada
    */

    function buscar_numero()
    {
        for($i = 0; $i < 10; $i++){
            yield $i;
        }
    }

    # A função geradora funciona como um iterador, podendo ser usada num ciclo
    # até que o gerador não tenha mais valores para devolver com o yield
    foreach(buscar_numero() as $numero)
    {
        echo "$numero<br>";
    }

    # Os geradores foram introduzidos na versão 5.5 do PHP, mas foram melhorados
    # na versão 7 com a inntrodução do yield from, que permitem outro tipo de retorno:
    # devolver valores de outro gerador,
    # devolver valores de um array.

    function buscar_nomes(){
        yield 'João';
        yield 'Maria';
        yield from ['Carlos', 'Ana', 'Antônio'];
        yield 'Fernando';
    }

    echo '<hr>';
    foreach(buscar_nomes() as $nome){
        echo "$nome<br>";
    }

    /*

    Como as funções geradoras não necessitam de tratar todos os dados de uma vez,
    quando usadas, podem aumentar substancialmente a performance do nosso script. 

    NOTA: O PHP vem acompanhado de uma imensa coleção de funções que estão sempre disponíveis
    para realizar operações com arrays, com strings, comunicar com bases de dados, encriptação,
    operar com ficheiros e pastas, etc.

    */