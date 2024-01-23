<?php

    # FILESYSTEM
    /*
        Vamos ver como podemos gravar um texto completo num ficheiro, e como ler esse
        texto completo para o interior de um variável de PHP
    */

    // gravar texto completo.

    $texto = "Lorem ipsum dolor sit amet. In voluptatem voluptas 
    ea harum dolores aut animi architecto qui omnis rerum et similique 
    natus quo cumque laborum. Qui quia maiores et itaque quos sit consequatur atque. 
    Et harum dolorem est voluptate distinctio qui doloribus neque ea fuga consequatur 
    qui repellendus impedit est consequatur quod.
    Est facere voluptatum ut possimus voluptatem est minima porro et minima molestiae 
    qui sint veniam est aliquam sunt sed officia rerum. In sint iste est corrupti 
    molestiae sit modi commodi. Et quod nisi eum dicta temporibus non enim enim et 
    laboriosam fuga.
    Qui voluptatem similique qui velit praesentium et possimus placeat sit amet 
    possimus qui voluptates odio. 33 sequi alias vel exercitationem incidunt non quos
    unde cum fugit voluptatem ut illum nemo quo consequatur explicabo vel totam rerum.";


    // file_put_contents('texto_completo.txt', $texto);
    // esta função é equivalente a chamar fopen, fwrite e fclose tudo na mesma função.

    // ler todo o conteúdo de um ficheiro para uma variável.
    $texto = file_get_contents('texto_completo.txt');
    echo $texto;