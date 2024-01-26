<?php

// DATETIME - intervalo entre duas datas

/*
    Imaginemos um cenário em que temos um cliente com uma dívida que já soma 
    um período de tempo considerável. Temos a data em que a dívida foi criada,
    e temos a data do dia de hoje. Queremos saber quantos dias passaram desde que 
    o cliente contraíu essa dívida.
*/

    $data_dividida = new DateTime('10-03-1997');
    $agora = new DateTime();
    echo 'Agora: ' . $agora->format('d-m-Y') . PHP_EOL;

    $intervalo = $data_dividida->diff($agora);
    echo 'Dias passados: ' .$intervalo->days . PHP_EOL;

    print_r($intervalo);