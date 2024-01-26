<?php

// DATETIME - add e sub
/*
    Podemos adicionar e subtrair períodos de tempo a uma data.
    Para isso usamos os métodos ADD e SUB

    DateInterval:
    P - Período
    PT - Período de tempo
*/

$data = new DateTime('01-01-2000 00:00:00');

// $data->add(new DateInterval('P180D')); // adiciona 180 dias
// $data->add(new DateInterval('P12W')); // adiociona 12 semanas
// $data->add(new DateInterval('PT72H')); // adiciona 72 horas


// $data->sub(new DateInterval('P180D')); // remove 180 dias
// $data->sub(new DateInterval('P12W')); // remove 12 semanas
// $data->sub(new DateInterval('PT72H')); // remove 72 horas

    $data->add(new DateInterval('PT80H15M30S'));
    echo $data->format('d-m-Y H:i:s');