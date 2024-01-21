<?php

    /*
        CONTANTS

        As constantes são variáveis cujo valor atribuído na sia definição, não pode ser alterado
        ao longo do script de PHP.
        O PHP permite definir constantes de duas formas: com o termo const e como o método define


        CONST

        O const é usado para definir constantes no contexto de classes.
        Ao contrário das propriedades public, protected ou private, as propriedades const 
        estão sempre visíveis (são públicas). Como não podem ser alteradas no valor, não existe o risco
        de ficarem expostas.

        Para definir uma constante, o nome deve ser sempre em maiúsculas, podendo ser usadas _
        Não é necessário o sinal do dollar como nas variáveis normais.
    */

    class Circulo
    {
        const PI = 3.14; // todas as constantes têm que ter valor atribuído sempre que são definidas
    }

    // é possível apresenar sem instanciar
    echo Circulo::PI;

    echo '<br>';

    // ou com instanciação
    $c = new Circulo;
    echo $c::PI;

    // ----------------------------------------------------------------------------------------------------

    # O termo const não deve ser aplicado a variáves locais ou a parâmetros.
    # Desde o PHP 5.3, o termo const pode ser usado para criar constantes globais.
    # Essas constantes são definidas no escopo global do script e ficam automaticamente acessíveis

    const APP_NAME = 'Minha Aplicação';
    echo APP_NAME;

    echo '<br>';

    # dentro de uma função
    function teste()
    {
        echo APP_NAME;
    }

    teste();

    # Não é possivel concatenar constantes na mesma forma que fazemos com variáveis
    echo "<br> Nome: APP_NAME";
    // Pra mostrar o valor de uma constante deve se usar a concatenação original:
    echo "<br> Nome:" . APP_NAME;

    # --------------------------------------------------------------------------------------

    # DEFINE

    # A função define permite definir constants globais e locais, mas não permite ser usada
    # dentro do contexto de uma classe.

    define('APP_NOME', 'Minha Aplicação');
    define('VERSAO', '1.0.0');
    define('MOSTRAR_ERROS', true);
    define('PI', 3.14);


    echo APP_NOME;
    echo '<br>';

    /*
        Por normal devemos definir os nomes das constantes sempre com maiúscula.
        Em versões anteriores da linguagem era possível usar um terceiro parÂmetro
        para indicar que a constante era case insensitive. Dese o PHP 7.3 esta opção
        ja não é mais valida.
    */

    define('CONSTANTE', 100);

    echo CONSTANTE . '<br>';

    // --------------------------------------------------------------------------------------------

    # CONSTANTS

    # Para verificarmos se uma constante já existe
    if(!defined('APP_NAME')){
        define('APP_NAME', 'Minha Aplicação');
    } else {
        echo 'Constante ja existe';
    }

    echo APP_NAME;
    echo '<br>';

    # ou mais commum ainda... 
    defined('CONTANTE2') or define('CONSTANTE2', 'valor');

    # Com o PHP 5.6 passou a ser possível definir uma constante com um array
    const NOMES = ['João', 'Ana', 'Carlos'];
    echo NOMES[0];
    echo '<br>';

    # com o PHP 7, passou a ser possível usar arrays no define
    define('NAMES', ['João', 'Ana', 'Carlos']);
    echo NAMES[2];