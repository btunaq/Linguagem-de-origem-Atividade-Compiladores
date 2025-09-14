<?php

$variavel_original = "Eu sou o valor original";
$referencia = &$variavel_original;

// Modificando a referência
$referencia = "Valor modificado através da referência";

echo $variavel_original;
// Saída: "Valor modificado através da referência"

?>