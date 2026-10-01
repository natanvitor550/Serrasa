<?php

function mascararCpf($cpf){
$cpf = "99999999";

return substr_replace($cpf, '**********', 0, 4);
};
echo mascararCpf($cpf);