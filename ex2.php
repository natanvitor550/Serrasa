<?php 

function inverterTexto($texto){

$caracteres = preg_split('//u', $texto, -1, PREG_SPLIT_NO_EMPTY);

$caracteresInvertidos = array_reverse($caracteres);

$textoInvertido = implode('', $caracteresInvertidos);

$quantidadeCaracteres = mb_strlen($texto);

return[
    "invertido" => $textoInvertido,
    "quantidade" => $quantidadeCaracteres

];

}

$textoUsuario = "Feijão com Farinha!";

$resultado = inverterTexto($textoUsuario);

echo $textoUsuario;
echo $resultado["invertido"]; 
echo $resultado["quantidade"];