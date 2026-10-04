<?php
function formatarTexto($texto){

$maiusculo = strtoupper($texto);
$minusculo = strtolower($texto);
$primeira_maiuscula = ucfirst($texto);
$quantidade_caracteres = strlen($texto);

return [
    "maiusculo" => $maiusculo,
    "minusculo" => $minusculo,
    "primeira_maiuscula" => $primeira_maiuscula,
    "quantidade_caracteres" => $quantidade_caracteres
];

}

$texto_usuario = "max verstappen you are the wolrd champion!";
$resultado = formatarTexto($texto_usuario);

echo "Texto original: $texto_usuario <br>";
echo "Texto em maiúsculas: " . $resultado["maiusculo"] . "<br>";
echo "Texto em minúsculas: " . $resultado["minusculo"] . "<br>";
echo "Texto com a primeira letra maiúscula: " . $resultado["primeira_maiuscula"] . "<br>";
echo "Quantidade de caracteres: " . $resultado["quantidade_caracteres"]

?>