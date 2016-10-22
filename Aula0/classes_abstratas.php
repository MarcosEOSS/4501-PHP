<?php

abstract class AbstractConta{

	public $titular;
	public $saldo = 0;

	public function depositar($valor){

		$this-> saldo += $valor;
		echo "Valor Depositado: R$ " . $valor . "<br />";

	}

	public function sacar($valor){

		$this->saldo -= $valor;
		echo "Valor Sacado: R$ " . $valor . "<br />";

	}
	
	public function verSaldo(){
		echo "Saldo Atual: R$ " . $this -> saldo . "<br />";
	}
	
	public abstract function mostrarTipoDeConta();

}

class ContaPoupanca extends AbstractConta {
	
	public $juros = 0.5;
	
	public function calcularJuros(){
		
		$this -> saldo = $this -> saldo * (1 + $this -> juros);
		echo "Valor do Juros: R$ " . $this -> saldo * $this -> juros . "<br />";
		
	
	}
	
	public function mostrarTipoDeConta(){
	
		echo "<br /> Sou uma conta poupanca <br />";
	}
	
}

class ContaCorrente extends AbstractConta{
	
	public function mostrarTipoDeConta(){

		echo "<br  /> Sou uma conta corrente<br />";
	}
	 
}

class ContaPoupancaPremium extends ContaPoupanca{
	
	public function mostrarJurosAtual(){
	$this -> juros = 1;
	echo "<br /> Juros Premium: " . $this -> juros;
	}
}

$conta1 = new ContaPoupanca();
$conta1 -> depositar(500);
$conta1 -> calcularJuros();
$conta1 -> verSaldo();
echo "<hr />";
$conta2 = new ContaCorrente();
$conta2 -> mostrarTipodeConta();
echo "<hr />";
$conta3 = new ContaPoupancaPremium();
$conta3 -> depositar(1000);
$conta3 -> calcularJuros();
$conta3 -> verSaldo();
$conta3 -> mostrarTipoDeConta();
$conta3 -> mostrarJurosAtual();
echo "<hr />";