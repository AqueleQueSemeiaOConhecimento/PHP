<?php

// DATETIME - criar uma data a partir de um formato
/*
    Vamos imaginar que nos é dada uma lista de datas com um determinado formato
    e que queremos "asimiliar" essas datas para uma estrutura DateTime.

    Neste caso podemos usar o métoco estático createFromFormat
*/

$datas = [
    '21-10-1998',
    '12-09-1996',
    '01-07-2001',
    '08-12-2005',
    '22-11-1987'
];

foreach($datas as $data){
    $d = DateTime::createFromFormat('d-m-Y', $data);
    //$d->add(new DateInterval('P180D'));
    echo $d->format('Y-m-d') . PHP_EOL;
}
