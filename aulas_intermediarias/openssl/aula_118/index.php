<?php

require_once('./public/config.php');

$senha = "abc123";
// echo md5($senha);

echo password_hash($senha, PASSWORD_ARGON2ID);

if(password_verify($senha, '$2y$10$0x6hwYYdd9qFCB3QQ21ikOpMO6IAb1rNVd8fVulIUG2/qIOev18cq')){
    echo 'login correto';
}
else {
    echo 'login inválido.';
}

/*

PASSWORD_DEFAULT
PASSWORD_BCRYPT
PASSWORD_ARGON2I

*/