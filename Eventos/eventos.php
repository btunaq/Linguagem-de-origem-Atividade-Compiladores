<?php
function dividir(int $a, int $b): float {
    if ($b === 0) {
        // Lança uma "exceção", que é um evento de erro tratável.
        throw new Exception("Divisão por zero não é permitida!");
    }
    return $a / $b;
}

try {
    echo "Tentando dividir 10 por 0...\n";
    $resultado = dividir(10, 0);
    echo "Resultado: $resultado\n";
} catch (Exception $e) {
    // O bloco 'catch' captura o evento e o trata.
    echo "Evento de Erro Capturado: " . $e->getMessage() . "\n";
} finally {
    echo "Este bloco é executado sempre, com ou sem erro.\n";
}