<?php
function analisarProdutos($produtos){
    $mais_caro = null;
    $mais_barato = null;
    $media_precos = 0;


    foreach($produtos as $produto){
        if($mais_caro === null || $produto["preco"] > $mais_caro["preco"]){
            $mais_caro = $produto;
        }
        if($mais_barato === null || $produto["preco"] < $mais_barato["preco"]){
            $mais_barato = $produto;
        }
        $media_precos += $produto["preco"];
    }
    $media_precos /= count($produtos);

    return [
        "mais_caro" => $mais_caro,
        "mais_barato" => $mais_barato,
        "media_precos" => $media_precos
    ];
    }

    $produto_usuario = [
        ["nome" => "feijão", "preco" => 5.99],
        ["nome" => "arroz", "preco" => 3.49],
        ["nome" => "macarrão", "preco" => 2.99],
        ["nome" => "carne", "preco" => 15.99],
        ["nome" => "frango", "preco" => 12.49]
    ];

    $resultado = analisarProdutos($produto_usuario);
    
echo "produro mais caro: " . $resultado["mais_caro"]["nome"] . " - R$" . $resultado["mais_caro"]["preco"] . "<br>";
echo "produto mais barato: " . $resultado["mais_barato"]["nome"] . " - R$" . $resultado["mais_barato"]["preco"] . "<br>";
echo "média de preços: R$" . $resultado["media_precos"] . "<br>";
?>