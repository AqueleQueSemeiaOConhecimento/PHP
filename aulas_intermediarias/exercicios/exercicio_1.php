<?php

    // Exercício: Apresentar od dados de uma coleção numa tabela de HTML

    // Estrutura: Nome, Genero, País

    $dados = [
        ['João', 'M', 'Portugal'],
        ['Ana', 'F', 'Brasil'],
        ['Carlos', 'M', 'Angola'],
        ['Matilde', 'F', 'Moçambique']
    ];

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercício com PHP e HTML</title>

        <style>
            body{
            padding: 10px;
        }
        article{
            border-bottom: solid 1px black;
        }
        table{
            border: solid 1px black;
        }
        td{
            border-bottom: solid 1px black;
            border-right: solid 1px black;
        }
        th{
            border-bottom: solid 1px black;
            border-right: solid 1px black;
        }

        #td{
            padding-left: 48%; 
        }

        .grid{
            display: grid;
            grid-template-columns: 1fr 1fr;
        }
        table{
            margin: 10px;
        }
        </style>

    </head>
    <body>
        
            <table>
                <thead>
                    <tr>
                        <th>Nome</th> <th>Genero</th> <th>Pais</th>
                    </tr>
                </thead>

                <tfoot></tfoot>                

                <tbody>
                    <?php foreach($dados as $dado): ?>
                    <tr>
                        <td><?php echo $dado[0] ?></td>
                        <td><?php echo $dado[1] ?></td>
                        <td><?php echo $dado[2] ?></td>
                    </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>

    </body>
</html>