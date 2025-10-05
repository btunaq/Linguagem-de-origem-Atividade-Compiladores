<?php

// =======================================================
// SUPORTE A CO-ROTINAS
// =======================================================

echo "--- 1. Generators (yield) --- \n";

/**
 * Uma função generator que gera uma sequência de números pares.
 * A execução é pausada a cada 'yield'.
 */
function gerar_pares(int $maximo): Generator {
    for ($i = 2; $i <= $maximo; $i += 2) {
        yield $i;
    }
}

echo "Gerando números pares até 10:\n";
foreach (gerar_pares(10) as $par) {
    echo $par . " ";
}
echo "\n";


echo "\n--- 2. Fibers (PHP >= 8.1) --- \n";

// Verifica a versão do PHP antes de executar, pois Fibers são para 8.1+
if (version_compare(PHP_VERSION, '8.1.0', '>=')) {

    $fiber = new Fiber(function(): void {
        echo "Fiber iniciada. Pausando...\n";
        $valor_recebido = Fiber::suspend('Pausa 1');
        echo "Fiber retomada com o valor: '$valor_recebido'.\n";
    });

    echo "Iniciando a Fiber...\n";
    $valor_suspensao = $fiber->start();
    echo "Script principal recebeu da fiber: '$valor_suspensao'.\n";

    if (!$fiber->isTerminated()) {
        echo "Retomando a Fiber...\n";
        $fiber->resume('Olá da thread principal!');
    }
    
    echo "Execução da Fiber concluída.\n";

} else {
    echo "Fibers requerem PHP 8.1 ou superior. Versão atual: " . PHP_VERSION . "\n";
}

?>