<?php

/* Crie 5 classes no contexto de SUPERMERCADO
Cada uma das classes deve conter 5 atributos
Cada uma das classes deve conter 3 métodos
pelo menos 1 de SET e GET
*/

class Cliente {
	public  $nome;
	public $telefone;
	private $endereco;
	private $cpf;
	public $email;

    public function __construct($nome, $telefone, $endereco, $cpf, $email) {
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->endereco = $endereco;
        $this->cpf = $cpf;
        $this->email = $email;

	}

	public function Comprar() {
		echo "Comprou";
	}

	public function getNome() {
		return $this->nome;
	}

	public function adicionaCliente($cliente) {
        $this->clientes[] = $cliente;
	}
}

?>