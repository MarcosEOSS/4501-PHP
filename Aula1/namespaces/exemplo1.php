<?php


Class Conta{
	
	protected $titular;
	protected $saldo;
	protected $banco;

	public function depositar($valor){

		$this -> saldo += $valor;

	}

	public function getSaldo(){
		return $this->saldo;
	}

	public function getTitular(){
		return $this->titular;
	}

	public function getBanco(){
		return $this->banco;
	}

	public function setTitular($valor){
		$this->titular = $valor;
	}

	public function setBanco($valor){
		$this->banco = $valor;	
	}

}


Class contaBradesco extends Conta{
	public function __construct(){
	$this->setBanco("Bradesco");
	}
}

Class contaCaixa extends Conta{
	public function __construct(){
	$this->setBanco("Caixa");
	}
}


$bradesco = new contaBradesco();
echo "Banco: {$bradesco->getBanco()}";

$caixa = new contaCaixa();
echo "Banco: {$caixa->getBanco()}";
