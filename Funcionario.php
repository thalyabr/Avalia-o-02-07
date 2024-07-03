<?php

class Funcionario {
	public $nome;
	public $telefone;
	private $salario;
	public $cargo;
	private $carga_horaria;	

	public function __construct($nome, $telefone, $salario, $cargo, $carga_horaria){
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->salario = $salario;
        $this->cargo = $cargo;
        $this->carga_horaria = $carga_horaria;
	}

	public function adicionaCarga($carga) {
        $this->carga_horaria[] = $carga;
    }

    public function getNome() {
        return $this->nome;
    }

    public function Contratar(){
    	echo "Contratado";
    }
}

?>