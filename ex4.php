<?php
 function gerarSenha($tamanho){
    $caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#$%¨&*()-_=+.;,?/\<>:';
    $senha = '';
    $limite = strlen($caracteres) - 1;

    for($i = 0; $i < $tamanho; $i++){
        $senha .= $caracteres[random_int(0, $limite)];
    }
    return $senha;
    }
    echo gerarSenha(20);
    ?>