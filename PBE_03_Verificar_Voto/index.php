<?php

//Mensagem inicial
echo "VERIFICAÇÃO DE PERMISSÃO PARA VOTAR!" . "</br>" . "----------------" . "</br>";

//setar variavel e exibi-la
$idade = 16;
echo "Sua idade: " . $idade . "</br>";

//verificação da idade e exibir resultado
if ($idade >= 16){
    echo "Você pode votar!";
}else{
    echo "Você não pode votar!";
}

?>