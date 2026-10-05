<?php
 function calcularTotal( $produto){
    return round($produto['quantidade'] * $produto['valorUnitario'], 2);
}

function calcularDesconto( $total){
    if ($total > 1000) {
        return round($total * 0.15, 2);
    }
    if ($total > 500) {
        return round($total * 0.10, 2);
    }
    return 0;
}

function calcularFrete($total){
    if ($total > 800) {
        return 0;
    }
    return $total <= 300 ? 35.00 : 20.00;
}

function calcularItens($produtos){
    $totalItens = 0;

    foreach ($produtos as $produto) {
        $totalItens += $produto['quantidade'];
    }

    return $totalItens;
}

function processarPedido($produtos){
    $totalCompra = 0;
    $produtoCaro = null;
    $produtoMaiorSubtotal = null;
    $subtotais = [];

    foreach ($produtos as $produto) {
        $subtotal = calcularTotal($produto);
        $subtotais[] = [
            'nome' => $produto['nome'],
            'quantidade' => $produto['quantidade'],
            'valorUnitario' => $produto['valorUnitario'],
            'subtotal' => $subtotal,
        ];
        $totalCompra += $subtotal;

        if ($produtoCaro === null || $produto['valorUnitario'] > $produtoCaro['valorUnitario']) {
            $produtoCaro = $produto;
        }

        if ($produtoMaiorSubtotal === null || $subtotal > $produtoMaiorSubtotal['subtotal']) {
            $produtoMaiorSubtotal = array_merge($produto, ['subtotal' => $subtotal]);
        }
    
}
$totalCompra = round($totalCompra, 2);
$desconto = calcularDesconto($totalCompra);
$frete = calcularFrete($totalCompra);
 


    return [
        'quantidade_produtos_diferentes' => count($produtos),
        'quantidade_total_itens' => calcularItens($produtos),
        'produto_mais_caro' => $produtoCaro,
        'produto_maior_subtotal' => $produtoMaiorSubtotal,
        'subtotais' => $subtotais,
        'total_compra' => $totalCompra,
        'desconto' => $desconto,
        'frete' => $frete,
        'valor_final' => round($totalCompra - $desconto + $frete, 2),
    ];
}

?>