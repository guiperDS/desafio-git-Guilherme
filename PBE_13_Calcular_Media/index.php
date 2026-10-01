<?php

function calcularmedia($n1, $n2){
    $media = ($n1+$n2)/2;

    if ($media >= 7){
        return "Aprovado";
    } else{
        return "Reprovado";
        }
}
echo calcularmedia(10, 8);

?>