<?php
// isso é um comentario
$nome = "Guilherme";
$idade = 16;
// ----------------------------------------------------------------------------------------------------
/* "<br>" serve para quebrar a linha, tudo que estiver depois do break vai pra linha de baixo
echo $nome; 
echo "<br>"; 
echo $idade;
echo "<br>";
*/

//concatenação usa o ponto (.) para unir frases e variaveis
echo "Ola " . $nome;
echo "<br>";
echo "Sua idade: " . $idade;
echo "<br>";

/* Operadores são metodos para contas dentro do sistema
(+) Adição
(-) Subtração
(*) Multiplicação
(/) Divisão
*/

echo "OPERADORES";

$a = 10;
$b = 5;

echo "<br>";
echo $a + $b;
echo "<br>";
echo $a - $b;
echo "<br>";
echo $a * $b;
echo "<br>";
echo $a / $b;

/*ESTRUTURA ELSEIF
if(verificação){
        saida se for verdade;
}elseif(segunda verificação){
        saida da segunda verificação se verdade;
}else{
    saida se tudo for falso;
}
*/

/* Estrutura condicionais 
WHILE
executa enquanto a condição for verdadeira

EXEMPLO:
$contador = 1

while($contador <=10 ){
        echo $contador . "</br>";
        
        $contador++;
}

ESTRUTURA DO WHILE

$i = 1

do{
   echo $1 . "</br>";
   $1++;
}while($i<=5);

ESTRUTURA FOR

for($i = 1;$i<=10;$i++){
        echo $i . "</br>;
}

ESTRUTURA FOREACH

$nomes = ["Ana Livia", "Leticia", "Gon", "Jess", "Guilherme"];

foreach($nomes as $nomes){
        echo $nomes . "</br>";
}

função:

function mensagem(){
        echo "bem vindo ao PHP!´<br>";
}

//Return

function somar($a, $b){
        return $a+$b;
}

$resultado = somar(10, 5);
?>