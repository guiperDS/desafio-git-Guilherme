<?php

//Variaveis
$nome = "Guilherme";
$idade = 16;
$curso = "ADS";
$cidade = "Lorena";
$telefone = "(12) 98126-9089";

//Exibição do cadastro
echo "Cadastro:";
echo "<br>";
echo "<br>";
echo "Nome " . $nome;
echo "<br>";
echo "Idade: " . $idade;
echo "<br>";
echo "Curso: " . $curso;
echo "<br>";
echo "Cidade: " . $cidade;
echo "<br>";
echo "Telefone: " . $telefone;
echo "<br>";
echo "--------------------";

//notas
$nota_1 = 6;
$nota_2 = 10;

//exibir notas
echo "<br>";
echo "Notas:";
echo "<br>";
echo "<br>";
echo "Nota 1: " . $nota_1;
echo "<br>";
echo "Nota 2: " . $nota_2;
echo "<br>";

//Calcular media
$media = ($nota_1 + $nota_2) / 2;
echo "Sua média é: " . $media;
echo "<br>";

//Aprovação/Reprovação
if($media>= 7){
    echo "Aprovado!";
}
else{ 
    echo "Reprovado!";
}
//Nota mental: nao colocar 500000 echos para break, só colocar um echo e "</br>" em tudo

?>