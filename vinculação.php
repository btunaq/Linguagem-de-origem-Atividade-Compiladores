
<?php
// Vinculação por Valor (padrão)
$valorOriginal = 10;
$copiaValor = $valorOriginal; // Uma cópia do valor 10 é feita

$copiaValor = 20; // Altera apenas a cópia

echo "Valor Original: " . $valorOriginal; // Saída: Valor Original: 10
echo "<br>";
echo "Cópia do Valor: " . $copiaValor;  // Saída: Cópia do Valor: 20
echo "<hr>";

// Vinculação por Referência
$valorReferencia = 50;
$outraReferencia = &$valorReferencia; // $outraReferencia agora aponta para o mesmo local que $valorReferencia

$outraReferencia = 100; // Altera o valor no local de memória compartilhado

echo "Valor Referência: " . $valorReferencia; // Saída: Valor Referência: 100
echo "<br>";
echo "Outra Referência: " . $outraReferencia; // Saída: Outra Referência: 100
?>