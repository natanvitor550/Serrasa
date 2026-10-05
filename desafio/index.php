<?php 
require_once 'pedidos.php';

$produtos = [
    ['nome' => 'Volante', 'quantidade' => 1, 'valorUnitario' => 2200.00],
    ['nome' => 'PS5', 'quantidade' => 2, 'valorUnitario' => 5120.00],
    ['nome' => 'Controle', 'quantidade' => 1, 'valorUnitario' => 550.00]
];

$relatorio = processarPedido($produtos);

echo '<h2>Desafio - Processamento de Pedidos</h2>';
echo '<h3>Subtotais dos produtos</h3>';
foreach ($relatorio['subtotais'] as $produto) {
    echo 'Produto: ' . $produto['nome'] . '<br>';
    echo 'Quantidade: ' . $produto['quantidade'] . '<br>';
    echo 'Valor unitário: ' . ($produto['valorUnitario']) . '<br>';
    echo 'Subtotal: ' . ($produto['subtotal']) . '<br><br>';
}

?>