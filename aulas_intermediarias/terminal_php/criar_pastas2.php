<?php 
    // FILESYSTEM
    // A melhor prática na criação de pastas é utilizar caminhos absolutos

    //mkdir('pasta1');

    mkdir(dirname(__FILE__) . '/pasta1');
    // dirname(__FILE__) pega o caminho absoluto de onde esta o arquivo que chama a execução
    