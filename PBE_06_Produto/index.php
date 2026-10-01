<?php

//variaveis
$produto = "Dados para RPG";
$quantidade = "10";

//exibição inicial
echo "Processo de compra" . "</br>" . "--------------------------" . "</br>";
echo "Produto selecionado: $produto" . "</br>";
echo "Quantidade disponivel: $quantidade" . "</br>" . "</br>";

//verificação de disponibilidade
if($quantidade >= 1){
    echo "Produto disponivel para compra!";
}else{
    echo "Produto indisponivel para compra!";
}

?>