<?php


class Conta{
	
	public $titular;
	public $saldo = 0;
	
	public function depositar($valor){
		
		$this-> saldo += $valor;
		echo "Deposito de R$ " . $valor . " efetuado com sucesso<br />";
		echo "Saldo atual: R$ " . $this -> saldo . "<br />";
		
	}
	
	public function sacar($valor){
	
		$this->saldo -= $valor;
		echo "Saque de R$ " . $valor . " efetuado com sucesso<br />";
		echo "Saldo atual: R$ " . $this -> saldo. "<br />";
		
	
	}
	
	
}


class ContaCorrente extends Conta{
	
	public function mostrarConta(){
		
		echo "Sou uma Conta Corrente <br />";
		echo "<hr />";
	}
	
}

class ContaPoupanca extends Conta{
	
	public function mostrarConta(){
	
		echo "Sou uma Conta Poupanca <br />";
		echo "<hr />";
	}

}

$conta1 = new Conta();
$conta1 -> titular = "Titular da Conta 1";
$conta1 -> depositar(1000);

$contacorrente = new ContaCorrente();
$contacorrente -> titular = "Titular Conta Corrente";
$contacorrente -> depositar(6000);
$contacorrente -> mostrarConta();

$contapoupanca = new ContaPoupanca();
$contapoupanca -> titular = "Titular Conta Poupanca";
$contapoupanca -> sacar(500);
$contapoupanca -> mostrarConta();



