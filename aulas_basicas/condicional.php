<?php

     # DECLARAÇÕES/INSTRUÇÕES CONDICIONAIS

    # São instruções utilizadas para controlar o fluxo da aplicação de acordo
    # com determinadas condições

    # Para a verificação das condições destas declarações, recorremos ao uso
    # de operadores de comparação combinados com operadores lógicos

    # O PHP contém várias estruturas condicionais, como iremos ver,
    # e no PHP 8 foi introduzida mais uma estrutura que também iremos
    # ficar a conhecer.

    //==========================================================================

    # Declaração IF - Define blocos de código que só são executados
    # Se a condição for verdadeira (true)

    $nome = 'João';
    if($nome == 'João')
    {
        echo 'Foi identificado o nome do autor do vídeo omg kk';
    }



    # IF ... ELSE

    $idade = 18;
    if($idade <= 18)
    {
        echo 'Adolescente';
    } else {
        echo 'Adulto';
    }



    # IF ... ELSE IF .... ELSE

    $nota = 5;   // num universo de 0 a 10
    if($nota <=2){
        echo 'Nota fraca';
    }
    else if($nota <= 4){
        echo 'Nota insuficiente';
    }
    else if($nota <= 6){
        echo 'Nota positiva';
    }
    else if($nota <= 8){
        echo 'Nota muito positiva';
    }
    else {
        echo 'Nota excelente';
    }

    # Podemos deixar de usar chaves se só existir uma instrução no bloco
    if($nota <=2)
        echo 'Nota fraca';
    else if($nota <= 4)
        echo 'Nota insuficiente';   
    else if($nota <= 6)
        echo 'Nota positiva';   
    else if($nota <= 8)
        echo 'Nota muito positiva';   
    else 
        echo 'Nota excelente';

    
    # Dependendo da condição pode haver e não haver chaves no bloco
    if($nota <=2){
        echo 'Nota fraca';
        echo 'Reportar ao diretor da escola';
    }
    else if($nota <= 4)
        echo 'Nota insuficiente';
    else if($nota <= 6)
        echo 'Nota positiva';
    else if($nota <= 8)
        echo 'Nota muito positiva';
    else 
        echo 'Nota excelente';


    # USO DE OPERADORES LÓGICOS COM INTRUÇÕES IF

    $numero = 20;
    if($numero > 10 && $numero != 30){
        // ececutar o código
    }
    else {
        // executar o código
    }



    # Condições dentro de condições
    $numero = 10;
    if($numero > 0){
        if($numero >= 100){
            echo 'O número é igual ou maior do que 100';
        }
        else {
            echo 'O número é positivo, mas inferior a 100';
        }
    } else {
        echo 'O número é negativo';
    }
    
    