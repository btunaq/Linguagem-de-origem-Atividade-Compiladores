<?php

#Precedencia

// Sem parênteses, a multiplicação ocorre primeiro
$resultado1 = 10 + 5 * 3; // 10 + 15
echo "Resultado 1: " . $resultado1; // Saída: Resultado 1: 25
echo "<br>";

// Com parênteses, a adição ocorre primeiro
$resultado2 = (10 + 5) * 3; // 15 * 3
echo "Resultado 2: " . $resultado2; // Saída: Resultado 2: 45
echo "<hr>";

// Exemplo com operadores lógicos
// '&&' (E) tem maior precedência que '||' (OU)
$a = true;
$b = false;
$c = true;

// Avaliação: ($b && $c) é falso. Então $a || false é verdadeiro.
$resultadoLogico = $a || $b && $c;
var_dump($resultadoLogico); // Saída: bool(true)


#Associatividade

// Associatividade à ESQUERDA (operadores aritméticos)
// Avaliado como (100 / 10) / 2
$calculo1 = 100 / 10 / 2; // 10 / 2
echo "Cálculo 1: " . $calculo1; // Saída: Cálculo 1: 5
echo "<br>";

// Associatividade à ESQUERDA (concatenação)
// Avaliado como ("Olá, " . "Mundo") . "!"
$texto = "Olá, " . "Mundo" . "!";
echo $texto; // Saída: Olá, Mundo!
echo "<hr>";

// Associatividade à DIREITA (operadores de atribuição)
$a = 0;
$b = 0;
// Avaliado como $a = ($b = 10)
$a = $b = 10;
echo "Valor de a: $a, Valor de b: $b"; // Saída: Valor de a: 10, Valor de b: 10
echo "<hr>";

// Associatividade à DIREITA (operador ternário)
$valor = 1;
// Avaliado da direita para a esquerda
// Primeiro, 'Zero' : 'Negativo' -> 'Zero' (porque 0 não é < 0)
// Depois, $valor > 0 ? 'Positivo' : 'Zero' -> 'Positivo' (porque 1 > 0)
$resultadoTernario = $valor > 0 ? 'Positivo' : ($valor < 0 ? 'Negativo' : 'Zero');
echo "Resultado Ternário: " . $resultadoTernario; // Saída: Resultado Ternário: Positivo
?>