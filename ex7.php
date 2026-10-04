<?php
function calcularDesconto($va_Compra){
    
    if($va_Compra < 100){
        $desconto = 0;
    } elseif($va_Compra >= 100 && $va_Compra <= 200){
        $desconto = 0.05;
    } elseif($va_Compra > 200 && $va_Compra <= 500){
        $desconto = 0.10;
    } else {
        $desconto = 0.15;
    }

    $valorDesconto = $va_Compra * $desconto;
    $valorFinal = $va_Compra - $valorDesconto;

    return [
        "valor_compra" => $va_Compra,
        "desconto" => $valorDesconto,
        "valor_final" => $valorFinal
    ];
}

$va_Compra = 250;

$resultado = calcularDesconto($va_Compra);

echo "Valor original: R$ " . number_format($resultado["valor_compra"], 2, ",", ".") . "<br>";
echo "Desconto aplicado: R$ " . number_format($resultado["desconto"], 2, ",", ".") . "<br>";
echo "Valor final: R$ " . number_format($resultado["valor_final"], 2, ",", ".") . "<br>";

?>