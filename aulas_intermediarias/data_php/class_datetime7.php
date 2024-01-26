<?php  

// EXEMPLO DE FUNÇÃO PARA CALCULAR A IDADE

$data_nascimento = new DateTime('06-07-2002');

echo calcular_idade($data_nascimento);


function calcular_idade($data_nascimento){
    $agora = new DateTime();

    // primeiro cálculo dos anos
    if($agora->format('Y') == $data_nascimento->format('Y')){
        // verifica se estamos no mesmo ano
        $anos = 1;
    }
    else {
        $anos = $agora->format('Y') - $data_nascimento->format('Y');
    }

    /*
        Validar os anos de forma precisa
        se ainda não chegámos ao "nosso" mês, temos menos 1 ano de
        que é calculado.
    */
    if($agora->format('m') < $data_nascimento->format('m')){
        $anos--;
    }
    else if($agora->format('m') == $data_nascimento->format('m')){
        // estamos no mês do nosso aniversario
        // Vamos ver se o dia já chegou

        if($agora->format('d') < $data_nascimento->format('d')){
            $anos--;
        }
    }   
    

    return $anos != 1? "$anos anos" : "1 ano";
}