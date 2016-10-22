<?php

	class Conta{

		public $titular;
		public $saldo;

		public function depositar($valor){
	
			$this -> saldo += $valor;
		}	

		public function verSaldo(){

			echo "Saldo Atual: R$ {$this -> saldo}<br />";
		}

		public function mostrarTipoConta(){

			echo "Esta eh uma conta comum.<br />";
		}
	}

	class Poupanca extends Conta{

		public function mostrarTipoConta(){

			echo "Esta eh uma conta poupanca.<br />";
		}

	}

	class Corrente extends Conta{

		public function mostrarTipoConta(){

			echo "Esta eh uma conta corrente.<br />";
		}
		
	}

	$conta1 = new Conta();
	$conta1 -> titular = "titular conta comum";
	$conta1 -> depositar(300);
	$conta1 -> verSaldo();
	$conta1 -> mostrarTipoConta();

	$conta2 = new Corrente();
	$conta2 -> titular = "titular conta corrente";
	$conta2 -> depositar(500);
	$conta2 -> verSaldo();
	$conta2 -> mostrarTipoConta();

	$conta3 = new Poupanca();
	$conta3 -> titular = "titular conta poupanca";
	$conta3 -> depositar(700);
	$conta3 -> verSaldo();
	$conta3 -> mostrarTipoConta();
