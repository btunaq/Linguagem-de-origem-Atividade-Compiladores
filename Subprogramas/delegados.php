<?php

// =======================================================
// SUBPROGRAMAS DELEGADOS (CALLABLES)
// =======================================================

// Função que executa um 'callable'
function processar_dados(array $dados, callable $funcao_callback) {
    $resultado = [];
    foreach ($dados as $item) {
        $resultado[] = $funcao_callback($item);
    }
    return $resultado;
}

// Exemplo 1: Usando o nome de uma função global como string
function para_maiusculo(string $texto): string {
    return strtoupper($texto);
}
$nomes = ["ana", "bruno", "carla"];
$nomes_maiusculos = processar_dados($nomes, 'para_maiusculo');
echo "Exemplo 1 (função global): \n";
print_r($nomes_maiusculos);

// Exemplo 2: Usando um método de objeto
class Formatador {
    public function adicionar_asteriscos(string $texto): string {
        return "*** {$texto} ***";
    }
}
$formatador = new Formatador();
$nomes_formatados = processar_dados($nomes, [$formatador, 'adicionar_asteriscos']);
echo "\nExemplo 2 (método de objeto): \n";
print_r($nomes_formatados);

// Exemplo 3: Usando uma função anônima (Closure)
$nomes_invertidos = processar_dados($nomes, function(string $texto): string {
    return strrev($texto); // inverte a string
});
echo "\nExemplo 3 (função anônima): \n";
print_r($nomes_invertidos);

?>