<?php
require_once 'Cliente.php';
require_once 'Funcionario.php';
require_once 'Produto.php';

class Teste {
    public function realizaTeste() {
        $cliente1 = new Cliente('Pedro Ferreira', '49 9999-8888', 'Videira', '000.000.000-00', 'joao@gmail.com');
        $cliente2 = new Cliente('Amanda Souza', '49 9886-7778', 'Videira', '000.000.000-11', 'amanda@gmail.com');

        echo "Nome do cliente: {$cliente1->getNome()}. <br>"; 
        echo "Nome do cliente: {$cliente2->getNome()}. <br>";
    }

    public function realizaTeste2() {
        $produto = new Produto("Notebook", 2500, 5, "PRD123", "Eletrônicos");
        echo "Nome do produto: {$produto->getNome()} <br>";
        $produto->definirPreco(2600);
        echo "Novo preço do produto: " . $produto->preco . "\n <br>" ;
        $produto->adicionaEstoque(10);
        echo "Quantidade em estoque após adição: " . $produto->quantidade . "\n <br>";
    }
}

$teste = new Teste();
$teste->realizaTeste();
$teste->realizaTeste2();
?>