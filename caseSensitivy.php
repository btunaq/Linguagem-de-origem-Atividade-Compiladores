<?php
// Nomes de variáveis válidos
$variavel = "Olá";
$outra_variavel = 123;
$_variavelComUnderscore = true;
$Variavel_Mista_123 = 1.23;

echo $variavel; // Saída: Olá
echo "<br>";

// Nomes de variáveis inválidos (causariam erro)
// $1variavel = "inválido";   // Começa com número
// $minha-variavel = "inválido"; // Contém hífen
// $minha variavel = "inválido"; // Contém espaço

// Exemplo de Case Sensitivity
$nome = "João";
$Nome = "Maria";

echo $nome; // Saída: João
echo "<br>";
echo $Nome; // Saída: Maria
?>