<?php
 
    /*
    PHP CLI SAPO
    ======================================================

    No estudo do PHP é importante nunca esquecer que esta linguagem não é apenas
    usada para a construção de website. Podemos usar o PHP para a execução de
    operações com linha de comandos no temrinal, quer seja de um servidor ou de
    um computador local.

    De facto, muitos procedimentos são efetuados do lado do servidor sem que o PHP
    necessite de um ambiente visual para apresentação de dados.

    Estes processos podem ser cronjobs (serviços executados de acordo com uma
    determinada regularidade) ou executadas manualmente na linha de comandos.

    O PHO contém um CLI SAPI
        CLI - command line interface
        SAPI - Server Applicantion Programamming Interface

    Permite executar instruções de uma forma muito simples.
    A CLI permite não só executar processos, mas também apresentar output
    no terminal (neste caso não formatado em HTML, como é obvio).

    EXEMPLO:

    1. Se queremos executar um comando de PHP:
        php -e "Phpinfo();" (-r permite executar o código sem as tags de PHP)
        php -r "echo 'Mensagem de teste';"
    
    2. Se queremos executar um scriot de PHP:
        php [nome_do_script].php 
        Ou até mesmo executar um script sem extensão .php
    */

    echo 'oi';