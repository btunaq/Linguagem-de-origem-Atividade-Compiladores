<?php

$fiber = new Fiber(function(): void {
    echo "Iniciando a Fiber...\n";
    $valor = Fiber::suspend('pausado');
    echo "Retomando a Fiber com o valor: " . $valor . "\n";
});

// Inicia a fiber. O código executa até o 'suspend'.
$status_inicial = $fiber->start();
echo "Fiber foi suspensa com o valor: " . $status_inicial . "\n";

// Retoma a execução da fiber, passando um novo valor.
$fiber->resume('Olá, mundo!');