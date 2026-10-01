<?php

function mascararCpf($cpf){
    
    return substr_replace($cpf, '****', 0, 4);
    };
$cpf = "99999999999";
echo mascararCpf($cpf);