<?php
function ordenarNomes($nomes) {
    sort($nomes);
    return $nomes;
}

$nomes_usuario = ["Ikaro", "Verstappen", "Jorge", "Hamilton", "Alonso", "Sainz", "Leclerc", "Russell"];
$nomes_ordenados = ordenarNomes($nomes_usuario);
echo "Nomes ordenados: <br>";
foreach ($nomes_ordenados as $nome) {
    echo $nome . "<br>";
}
?>