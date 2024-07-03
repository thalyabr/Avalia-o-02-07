<?php

class Produto {
	public $nome;
	public $preco;
	public $quantidade;
	public $cogigo;
	public $categoria;

	public function __construct($nome, $preco, $quantidade, $codigo, $categoria) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
        $this->codigo = $codigo;
        $this->categoria = $categoria;
	}

    public function definirPreco($novo_preco) {
        $this->preco = $novo_preco;
    }

    public function adicionaEstoque($quantidade) {
        $this->quantidade += $quantidade;
    }

    public function getNome() {
        return $this->nome;
    }


}

?>