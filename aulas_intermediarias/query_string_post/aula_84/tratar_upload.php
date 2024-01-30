<?php

echo '<pre>';
print_r($_FILES);

// mover ficheiro para o destino final
move_uploaded_file($_FILES['caixa_ficheiro']['tmp_name'], "c:/Users/d3rr3/OneDrive/Documentos/teste/" . $_FILES['caixa_ficheiro']['name']);