<?php

     

    function gerar_nome(){
        $nomes = ['Beatriz', 'Luci', 'Matheus', 'Raphael', 'Dark', 'Manoel', 'Nicolas', 'Yuri', 'Dioneide', 'Junior', 'Evelyn', 'Kurumi'];
        $apelidos = ['Pintudo(a)', 'Caga tronco', 'Come bosta', 'Peida leite', 'Azedo(a)', 'Bosta mole', 'Pairulito', 'Meia bomba', 'Cu de foça'];
        echo $nomes[rand(0, count($nomes) -1)] . ' ' . $apelidos[rand(0, count($apelidos) -1)];
    }

    gerar_nome();