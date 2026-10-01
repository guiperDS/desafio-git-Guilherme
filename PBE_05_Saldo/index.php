<?php

//variaveis
$nome = "Guilherme";
$saldo = "$500,00";
$valor_saque = "$499,00";

//exibição inicial e valor de saque
echo "Processo de saque" . "</br>" . "---------------------" . "</br>";
echo "Senhor(a):   $nome.  o valor a ser sacado é de: " . $valor_saque . "</br>";
echo "Seu saldo é de: $saldo" . "</br>";
echo "---------------------" . "</br>";

//verificação de dispnibilidade
if ($saldo >= $valor_saque){
    echo "Saque autorizado!!";
}else{
    echo "saldo insuficiente!";
}
?>