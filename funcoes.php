<?php
function calcularIMC($peso, $altura) {
    if ($altura <= 0) {
        return "Altura inválida. Deve ser maior que zero.";
    }
    $imc = $peso / ($altura * $altura);
    return round($imc, 2);
}

function validarEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

function senhaAleatoria($tamanho = 8) {
    $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+-=';
    $senha = '';
    for ($i = 0; $i < $tamanho; $i++) {
        $senha .= $caracteres[rand(0, strlen($caracteres) - 1)];
    }
    return $senha;
}

funcition contarVogais($texto) {
    $vogais = ['a', 'e', 'i', 'o', 'u'];
    $contador = 0;
    for ($i = 0; $i < strlen($texto); $i++) {
        if (in_array(strtolower($texto[$i]), $vogais)) {
            $contador++;
        }
    }
    return $contador;
}

function inverterTexto($texto) {
    return strrev($texto);
}

function calcularIdade($dataNascimento) {
    $dataNascimento = new DateTime($dataNascimento);
    $dataAtual = new DateTime();
    $idade = $dataAtual->diff($dataNascimento);
    return $idade->y;
}

function converterMoeda($moedaOrigem, $moedaDestino){
    return $moedaOrigem * $moedaDestino;
}

function formatarTelefone($numero){
    $numero = preg_replace('/\D/', '', $numero);
    if (strlen($numero) == 10) {
        return preg_replace('/(\d{2})(\d{4})(\d{4})/', '($1) $2-$3', $numero);
    } elseif (strlen($numero) == 11) {
        return preg_replace('/(\d{2})(\d{5})(\d{4})/', '($1) $2-$3', $numero);
    } else {
        return "Número de telefone inválido.";
    }
}

function saudacaoHorario($hora) {
    if ($hora >= 5 && $hora < 12) {
        return "Bom dia!";
    } elseif ($hora >= 12 && $hora < 18) {
        return "Boa tarde!";
    } elseif ($hora >= 18 && $hora < 22) {
        return "Boa noite!";
    } else {
        return "Boa madrugada!";
    }
}

function validarSenha($senha) {
    $temMaiuscula = preg_match('/[A-Z]/', $senha);
    $temMinuscula = preg_match('/[a-z]/', $senha);
    $temNumero = preg_match('/[0-9]/', $senha);
    $temEspecial = preg_match('/[\W]/', $senha);
    return $temMaiuscula && $temMinuscula && $temNumero && $temEspecial;
}
?>