<?php
require_once "funcoes.php";

echo "IMC: " . calcularIMC(70, 1.75) . "<br>";
echo "Email válido: " . (validarEmail("example@example.com") ? "Sim" : "Não") . "<br>";
echo "Senha aleatória: " . senhaAleatoria(12) . "<br>";
echo "Contagem de vogais: " . contarVogais("Olá, como vai você?") . "<br>";
echo "Texto invertido: " . inverterTexto("Socorram me subi no onibus em marrocos") . "<br>";
echo "Idade: " . calcularIdade("1990-05-15") . "<br>";
echo "Conversão de moeda: " . converterMoeda(100, 5.25) . "<br>";
echo "Telefone: " . formatarTelefone("11987654321") . "<br>";
echo "Saudação: " . saudacaoHorario(10) . "<br>";
echo "Validar senha: " . (validarSenha("SenhaForte123!") ? "Válida" : "Inválida") . "<br>";

?>