<?php

class Carrinho {
	public $lista;
	public $cupom;
	public $totalPagar;
	public $cliente;
	public $status;


public function __construct($lista, $cupom, $totalPagar, $cliente, $status) {
	$this->lista = $lista;
	$this->cupom = $cupom;
	$this->totalPagar = $totalPagar;
	$this->cliente = $cliente;
	$this->status = $status;
}

public function adicionarItem(Produto $produto) { 
        $this->produtos[] = $produto;
    }

public function getLista() {
	return $this->lista;
}

public function setStatus($novoStatus) {
    $this->status = $novoStatus;
}
}

?>
