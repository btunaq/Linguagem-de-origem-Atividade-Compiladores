<?php

// =======================================================
// FUNÇÕES LAMBDA E CLOSURES
// =======================================================

echo "--- 1. Função Lambda (Anônima) --- \n";

// Atribuindo uma função anônima a uma variável
$multiplicar = function(int $a, int $b): int {
    return $a * $b;
};

echo "Resultado de 7 * 6 é: " . $multiplicar(7, 6) . "\n";


echo "\n--- 2. Closure (capturando variável do escopo) --- \n";

function criar_contador() {
    $contador = 0;
    
    // A função anônima "lembra" da variável $contador de seu escopo pai
    $incrementar = function() use (&$contador) {
        $contador++;
        echo "Contador agora é: $contador\n";
    };
    
    return $incrementar;
}

$meu_contador = criar_contador();
$meu_contador();
$meu_contador();
$meu_contador();


echo "\n--- 3. Arrow Functions (PHP >= 7.4) --- \n";

$numeros = [1, 2, 3, 4, 5];
$fator = 10;

// Sintaxe mais curta que captura automaticamente a variável $fator
$numeros_multiplicados = array_map(fn($n) => $n * $fator, $numeros);

echo "Array original: " . implode(', ', $numeros) . "\n";
echo "Array multiplicado por $fator: " . implode(', ', $numeros_multiplicados) . "\n";

?>