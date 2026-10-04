<?php
function calcularDesconto($valor_compra){
    
    if($valor_compra < 100){
        $desconto = 0;
    } elseif($valor_compra >= 100 && $valor_compra <= 200){
        $desconto = 0.05;
    } elseif($valor_compra > 200 && $valor_compra <= 500){
        $desconto = 0.10;
    } else {
        $desconto = 0.15;
    }

    $valor_desconto = $valor_compra * $desconto;
    $valor_final = $valor_compra - $valor_desconto;

    return [
        "valor_compra" => $valor_compra,
        "valor_desconto" => $valor_desconto,
        "valor_final" => $valor_final
    ];
}

$valor_compra = 250;

$resultado = calcularDesconto($valor_compra);

echo "Valor original: R$ " . number_format($resultado["valor_compra"], 2, ",", ".") . "<br>";
echo "Desconto aplicado: R$ " . number_format($resultado["valor_desconto"], 2, ",", ".") . "<br>";
echo "Valor final: R$ " . number_format($resultado["valor_final"], 2, ",", ".") . "<br>";

?>