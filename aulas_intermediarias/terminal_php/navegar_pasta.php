<?php 

    # NAVEGAR ENTRE PASTAS COM CHDIR E CRIAR FICHEIROS COM TOUCH
    // FILESYSTEM   

    #mkdir(dirname(__FILE__) . '/pasta1');
    #chdir('pasta1');
    #touch('Ficheiro');

    // pego o caminho absoluto da pasta que esta meu arquivo e nele crio a pasta1
    // com chdir digo que pasta1 recebe o Ficheiro criado pelo touch();

    mkdir(dirname(__FILE__) . '/pasta1');
    chdir('pasta1');
    touch('ficheiro1');
    chdir('../');
    touch('ficheiro2');