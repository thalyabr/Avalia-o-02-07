<?php

class Caixa {
	public $numero;
	public $responsavel;
	public $totalVendido;
	public $recibos;
	public $status;


public function __construct($numero, $reponsavel, $totalVendido, $recibos, $status) {
	$this->numero = $numero;
	$this->responsavel = $responsavel;
	$this->totalVendido = $totalVendido;
	$this->recibos = $recibos;
	$this->status = $status;
}


public function getNumero() {
	return $this->numero;
}

public function getResponsavel() {
	return $this->responsavel;
}

 public function setStatus($novoStatus) {
    $this->status = $novoStatus;
}
}

?>