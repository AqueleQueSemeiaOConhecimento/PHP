<?php

# DECLARAÇÕES/INSTRUÇÕES CONDICIONAIS

# SWITCH - uma alteranativa ao IF

$nome = 'João';
switch ($nome) {
    case 'João':
        # codigo 1
        break;
    case 'Ana':
        # codigo 2
        break;
    default:
        # codigo 3
        break;
}


switch ($nome) {
    case 'João':
        echo '1';
        break;
    case 'Ana':
        echo '2';
        break;
    default:
        echo 'outra coisa qualquer';
        break;
}


# Sintaxe alterantiva

# normal
$valor = 5;
if($valor == 10){
    // código 1
} else {
    // código 2
}

# alternativa
if($valor == 10):
    // código 1
else:
    // código 2
endif;


    # switch
    switch ($variable):
        case 'value':
            # code... 
            break;

        default:
            # code... 
            break;
    endswitch;

    # DECLARAÇÕES/INSTRUÇÕES CONDICIONAIS

    # sintaxe alternativa

?>

<?php if(true): ?>
    <div>Executar este código HTML</div>
<?php else: ?>
    <h3>Executar aqui</h3>
<?php endif; ?>