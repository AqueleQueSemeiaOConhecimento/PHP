<?php 

// encriptar
define('AES_KEY', 'WG8CKQP76YdFu3tlmkPdR2cUAqcRrvMu');
define('AES_IV', 'g4BPx0J1gXRFNUtW');

function aes_encriptar($valor)
{
    return bin2hex(openssl_encrypt($valor, 'aes-256-cbc', AES_KEY, OPENSSL_RAW_DATA, AES_IV));
}


// desencriptar

function aes_desencriptar($hash)
{
    // verifica se a hash é valida
    if(strlen($hash) %2 !=0){
        return -1;
    }

    return openssl_decrypt(hex2bin($hash), 'aes-256-cbc', AES_KEY, OPENSSL_RAW_DATA, AES_IV);
}