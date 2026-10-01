<?php

echo '<h3> Calcular percentual </h3>';

function CalcularPorcentagem($valor, $porcentagem){
    return ($valor * $porcentagem / 100);
}
//variaveis
$valor = 500;
$percentual = 67;

$desconto = CalcularPorcentagem($valor, $percentual);
$valor_final = $valor - $desconto;

echo sprintf('<br> O valor inicial é de: %d. <br> o Desconto é de: %d. <br> O Valor Final é de: %d.',
//mostrar resultado
    $valor,
    $desconto,
    $valor_final,
);


?>