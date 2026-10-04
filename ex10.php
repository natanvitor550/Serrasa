<?php
function calcularMedia($notas){
    $soma = array_sum($notas);
    $quantidade = count($notas);
    $media = $soma / $quantidade;

    if ($media >= 7) {
        $resultado = "Aprovado";
    } elseif ($media >= 5) {
        $resultado = "Recuperação";
    } else {
        $resultado = "Reprovado";
    }

    return [
        "notas" => $notas,
        "media" => $media
    ];

}

$notas_estudante=[6, 8, 7, 9];
$resultado = calcularMedia($notas_estudante);

echo "Notas: " . implode(", ", $resultado["notas"]) . "<br>";
echo "Média: " . number_format($resultado["media"], 2, ",", ".") . "<br>";
if ($resultado["media"] >= 7) {
    echo "Resultado: Aprovado";
} elseif ($resultado["media"] >= 5) {
    echo "Resultado: Recuperação";
} else {
    echo "Resultado: Reprovado";
}


?>