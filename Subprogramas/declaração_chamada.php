<?php

// =======================================================
// SUBPROGRAMAS: FUNÇÕES E MÉTODOS
// =======================================================


/**
 * Declaração de uma função simples que não recebe parâmetros e não retorna valor.
 */
function exibir_saudacao() {
    echo "Olá, mundo! Esta é uma função simples.\n";
}

/**
 * Declaração de uma função com parâmetros e tipo de retorno definido.
 *
 * @param int $a O primeiro número a ser somado.
 * @param int $b O segundo número a ser somado.
 * @return int A soma dos dois números.
 */
function somar(int $a, int $b): int {
    return $a + $b;
}

// Chamando as funções
exibir_saudacao();

$numero1 = 15;
$numero2 = 7;
$resultado_soma = somar($numero1, $numero2);
echo "A soma de $numero1 e $numero2 é: $resultado_soma\n";

echo "\n--- 2. Métodos de Classe --- \n";

class Pessoa {
    // Propriedade da classe
    public string $nome;

    // Construtor da classe
    public function __construct(string $nome) {
        $this->nome = $nome;
    }

    /**
     * Declaração de um método público.
     */
    public function apresentar(): void {
        echo "Olá, meu nome é {$this->nome}.\n";
    }
}

// Instanciando um objeto da classe Pessoa
$pessoa = new Pessoa("Carlos");

// Chamando o método do objeto
$pessoa->apresentar();

?>