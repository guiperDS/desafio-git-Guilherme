<?php

//variaveis
$nota = 1;
$nome = "Guilherme";

//exibição de variaveis
echo "Verificação de situação escolar" . "</br>" . "-------------------------" . "</br>";
echo "Seu nome: " . $nome . "<br>" . "Sua Nota: " . $nota . "</br>" . "----------------" . "</br>"; 

//verificação das notas e exibição
if($nota >= 9){
    echo "Aprovado com excelente nota!";
}elseif($nota >= 7){
    echo "Aprovado com boa nota!";
}elseif($nota >= 5){
    echo "Recuperação!";
}else{
    echo "Reprovado!";
}

?>