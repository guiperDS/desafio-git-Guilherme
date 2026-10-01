<?php
//variavel
$numero = 1;

//exibição
echo "Mostrar numeros de 1 a 20" . "</br>";
while($numero <= 20){
    echo $numero . "</br>";

    $numero ++;
}
echo "------------------" . "</br>";

//exibição
echo "mostrar numeros pares" . "</br>";
for($numero=0;$numero <= 100;$numero +=2){
    echo $numero . "</br>";
}
echo "------------------" . "</br>";

//variavel
$numero = 20;

echo "Numeros de 20 a 1" . "</br>";
while($numero >= 1){
    echo $numero . "</br>";

    $numero --;
}
echo "-----------------";

?>