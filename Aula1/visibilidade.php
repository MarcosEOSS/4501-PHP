<?php

Class Conta{
	
	protected $titular;
	protected $saldo;

	public function Depositar($valor){

		$this -> saldo += $valor;

	}

	public function verSaldo(){

		echo "<hr /> Saldo Atual: " . $this -> saldo . "<hr />";
	}

	public function verTitular(){
		echo "<hr /> Titular: " . $this -> titular . "<hr />";
	}


}

class Poupanca extends Conta{

	public function nomearTitular($nome){
		$this-> titular = $nome;
	}

	public function mostrarTipoConta(){
		echo "<hr />Sou uma conta Poupanca<hr />";
	}
}


$cp = new Poupanca();
$cp -> nomearTitular("Poupanca Titular");
$cp -> depositar(300);
$cp -> verSaldo();
$cp -> verTitular();
