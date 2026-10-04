<?php
function criptografarMensagem($texto, $deslocamento) {

return strtr($texto, range('a', 'z'), range('a', 'z') + $deslocamento);

}
function descriptografarMensagem($texto, $deslocamento) {

return strtr($texto, range('a', 'z'), range('a', 'z') - $deslocamento);

}

function cifraCesar($texto, $deslocamento) {
$resultado = '';

for ($i = 0; $i < strlen($texto); $i++) {
    $caractere = $texto[$i];
    if (ctype_alpha($caractere)) {
        $base = ctype_upper($caractere) ? ord('A') : ord('a');
        $resultado .= chr((ord($caractere) - $base + $deslocamento) % 26 + $base);
      
   
        } else {
        $resultado .= $caractere;
    }
}
return $resultado;
}

$mensagem = "Eu tentei pensar em algo maneiro, mas não consegui";
$deslocamento = 3;

echo "Mensagem original: $mensagem <br>";
$mensagem_criptografada = cifraCesar($mensagem, $deslocamento);
echo "Mensagem criptografada: $mensagem_criptografada <br>";
$mensagem_descriptografada = cifraCesar($mensagem_criptografada, -$deslocamento);
echo "Mensagem descriptografada: $mensagem_descriptografada <br>";
?>