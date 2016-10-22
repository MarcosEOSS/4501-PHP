<?php

	trait Operacoes{

		public function depositar($valor){
			$this->saldo += $valor;
		}

		public function sacar($valor){
			$this->saldo -= $valor;
		}

		public function mostrarMetodo(){
			echo "Eu sou um metodo do Trait Operacoes";
		}
	}

	class Conta{
		use Operacoes;

		public $saldo;
		public $titular;

		public function verSaldo(){
			echo "<hr /> Saldo: {$this->saldo}<hr />";
		}

		public function mostrarMetodo(){
			echo "Eu sou um metodo da classe conta";
		}
	}

	class Poupanca extends Conta{
		use Operacoes; /*chamando a trait na classe filha,
		ela sobrescreve a sua execucao na classe pai*/
	}

	$obj = new Poupanca();
	$obj-> mostrarMetodo();
	echo "<hr />";
	$obj2 = new Conta();
	$obj2-> mostrarMetodo();
