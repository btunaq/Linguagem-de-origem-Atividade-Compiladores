
<?php
function minhaFuncao() {
    $variavelLocal = 0; // Criada a cada chamada da função
    echo "Variável Local: " . $variavelLocal;
    $variavelLocal++;
    echo "<br>";
}

function minhaFuncaoEstatica() {
    static $variavelEstatica = 0; // Criada apenas na primeira chamada
    echo "Variável Estática: " . $variavelEstatica;
    $variavelEstatica++;
    echo "<br>";
}

echo "Chamando função com variável local:<br>";
minhaFuncao(); // Saída: Variável Local: 0
minhaFuncao(); // Saída: Variável Local: 0
minhaFuncao(); // Saída: Variável Local: 0
echo "<hr>";

echo "Chamando função com variável estática:<br>";
minhaFuncaoEstatica(); // Saída: Variável Estática: 0
minhaFuncaoEstatica(); // Saída: Variável Estática: 1
minhaFuncaoEstatica(); // Saída: Variável Estática: 2
?