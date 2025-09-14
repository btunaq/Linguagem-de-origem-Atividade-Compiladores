<?php
$variavelGlobal = "Eu sou global";

function testarEscopo() {
    $variavelLocal = "Eu sou local";

    echo $variavelLocal; // Funciona, está no escopo local
    echo "<br>";

    // Tentativa 1: Acessar a global diretamente (NÃO FUNCIONA)
    // echo $variavelGlobal; // Geraria um aviso (Notice: Undefined variable)

    // Tentativa 2: Usando a palavra-chave 'global' (CORRETO)
    global $variavelGlobal;
    echo "Acesso com 'global': " . $variavelGlobal;
    echo "<br>";

    // Tentativa 3: Usando a array $GLOBALS (CORRETO)
    echo "Acesso com '\$GLOBALS': " . $GLOBALS['variavelGlobal'];
    echo "<br>";
}

testarEscopo();
echo "<hr>";

// Acessando a variável global fora da função (Funciona)
echo $variavelGlobal;
echo "<br>";

// Tentando acessar a variável local fora da função (NÃO FUNCIONA)
// echo $variavelLocal; // Geraria um aviso (Notice: Undefined variable)
?>