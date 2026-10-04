<?php

function converterTemperatura($es_origem, $es_destino, $valor){

switch($es_origem) {
    case "Celsius":
        $celsius = $valor;
        break;
    case "Fahrenheit":
        $celsius = ($valor - 32) * 5/9;
        break;
    case "Kelvin":
        $celsius = $valor - 273.15;
        break;
    default:
        return null; 

}

switch($es_destino) {
    case "Celsius":
        return $celsius;
    case "Fahrenheit":
        return ($celsius * 9/5) + 32;
    case "Kelvin":
        return $celsius + 273.15;
    default:
        return null; 
}
}

$origem_usuario = "Celsius";
$destino_usuario = "Fahrenheit";
$valor_usuario = 100;

echo "$valor_usuario em graus $origem_usuario é igual a: ";

echo converterTemperatura($origem_usuario, $destino_usuario, $valor_usuario) . " graus $destino_usuario";

echo "graus $destino_usuario";
?>