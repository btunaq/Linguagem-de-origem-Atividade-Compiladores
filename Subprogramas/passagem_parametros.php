<?php

// =======================================================
// MODELOS DE PASSAGEM DE PARÂMETROS
// =======================================================

echo "--- 1. Passagem por Valor (Padrão) --- \n";

function modificar_valor(int $variavel) {
    $variavel += 10;
    echo "Dentro da função, o valor é: $variavel\n";
}

$numero_original = 5;
echo "Valor original antes da função: $numero_original\n";
modificar_valor($numero_original);
echo "Valor original depois da função: $numero_original (não foi alterado)\n";

echo "\n--- 2. Passagem por Referência --- \n";

function modificar_referencia(int &$variavel) {
    $variavel += 10;
    echo "Dentro da função, o valor é: $variavel\n";
}

$numero_referencia = 5;
echo "Valor original antes da função: $numero_referencia\n";
modificar_referencia($numero_referencia);
echo "Valor original depois da função: $numero_referencia (foi alterado)\n";

echo "\n--- 3. Parâmetros com Valores Padrão --- \n";

function gerar_email(string $usuario, string $dominio = "meudominio.com") {
    echo "Email gerado: {$usuario}@{$dominio}\n";
}

gerar_email("contato"); // Usa o domínio padrão
gerar_email("vendas", "outradempresa.com"); // Fornece um domínio específico

?>