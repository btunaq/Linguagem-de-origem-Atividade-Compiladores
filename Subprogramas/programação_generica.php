
<?php

// =======================================================
// SIMULAÇÃO DE PROGRAMAÇÃO GENÉRICA
// =======================================================

echo "--- Usando o tipo 'mixed' (PHP >= 8.0) para simular uma classe genérica ---\n";

/**
 * A classe Colecao pode armazenar qualquer tipo de elemento,
 * simulando uma coleção genérica.
 */
class Colecao
{
    private array $itens = [];

    public function adicionar(mixed $item): void
    {
        $this->itens[] = $item;
    }

    public function obterItem(int $indice): mixed
    {
        return $this->itens[$indice] ?? null;
    }
    
    public function obterTodos(): array
    {
        return $this->itens;
    }
}

// Exemplo com inteiros
$colecao_de_numeros = new Colecao();
$colecao_de_numeros->adicionar(10);
$colecao_de_numeros->adicionar(20);
$colecao_de_numeros->adicionar(30);
echo "\nColeção de Números: \n";
print_r($colecao_de_numeros->obterTodos());

// Exemplo com strings
$colecao_de_textos = new Colecao();
$colecao_de_textos->adicionar("PHP");
$colecao_de_textos->adicionar("é");
$colecao_de_textos->adicionar("versátil");
echo "\nColeção de Textos: \n";
print_r($colecao_de_textos->obterTodos());


// Exemplo com objetos
class Produto {
    public function __construct(public string $nome){}
}

$colecao_de_produtos = new Colecao();
$colecao_de_produtos->adicionar(new Produto("Laptop"));
$colecao_de_produtos->adicionar(new Produto("Mouse"));
echo "\nColeção de Produtos: \n";
print_r($colecao_de_produtos->obterTodos());

?>