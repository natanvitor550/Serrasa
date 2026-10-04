<?php
function estatisticasNumericas($numeros) {
    $quantidade = count($numeros);
    $soma = array_sum($numeros);
    $media = $soma / $quantidade;
    $maior = max($numeros);
    $menor = min($numeros);
    $quantidade = count($numeros);
    $numerosOrdenados = $numeros;
    sort($numerosOrdenados);
    $posicaoCentral = floor($quantidade / 2);

    if ($quantidade % 2 == 0) {
       $mediana = ($numerosOrdenados[$posicaoCentral - 1] + $numerosOrdenados[$posicaoCentral]) / 2;
   } else {
       $mediana = $numerosOrdenados[$posicaoCentral];
   }

   $quanti_par = 0;
   $quanti_impar = 0;

    foreach ($numeros as $numero) {
         if ($numero % 2 == 0) {
              $quanti_par++;
         } else {
              $quanti_impar++;
         }
    }

    return [
        "quantidade" => $quantidade,
        "soma" => $soma,
        "media" => $media,
        "maior" => $maior,
        "menor" => $menor,
        "mediana" => $mediana,
        "paridade" => [
            "quantidade_par" => $quanti_par,
            "quantidade_impar" => $quanti_impar
        ]
    ];
}
$numeros_usuario = [12, 7, 33, 1, 77, 91];
$resultado = estatisticasNumericas($numeros_usuario);

echo "Números fornecidos: " . implode(", ", $numeros_usuario) . "<br>";
echo "Quantidade de números: " . $resultado["quantidade"] . "<br>";
echo "Soma dos números: " . $resultado["soma"] . "<br>";
echo "Média dos números: " . $resultado["media"] . "<br>";
echo "Maior número: " . $resultado["maior"] . "<br>";
echo "Menor número: " . $resultado["menor"] . "<br>";
echo "Mediana: " . $resultado["mediana"] . "<br>";
echo "Paridade: " . $resultado["paridade"]["quantidade_par"] . " pares, " . $resultado["paridade"]["quantidade_impar"] . " ímpares<br>";

?>