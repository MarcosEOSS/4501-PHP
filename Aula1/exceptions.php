<?php
	class Conta{
		private $titular;
		private $saldo = 0;

		public function getTitular(){
			return $this->titular;
		}

		public function getSaldo(){
			return $this->saldo;
		}

		public function setTitular($nome){
			$this->titular = $nome;
		}

		public function depositar($valor){
			$this->saldo+= $valor;
			echo "Deposito de R$ {$valor} efetuado com sucesso!<br />";
		}

		public function sacar($valor){
			if($valor > $this->saldo){
				throw new Exception("Saldo Insuficiente",1000);
			} else{
				$this->saldo-=$valor;
				echo "Saque de R$ {$valor} efetuado com sucesso!<br />";
			}
		}

		public function verSaldo(){
			return $this->saldo;
		}

	}

	$conta = new Conta();
	try{
		$conta->setTitular("Marcos Eduardo");
		$conta->depositar(900);
		echo "Saldo Atual: {$conta->verSaldo()}<hr />";
		$conta->sacar(150);
		echo "Saldo Atual: {$conta->verSaldo()}<hr />";
		$conta->sacar(300);
		echo "Saldo Atual: {$conta->verSaldo()}<hr />";
		$conta->sacar(545);
	} catch (Exception $e){
		echo "ERRO {$e->getCode()} - <b><font color='red'>{$e->getMessage()}</font></b><hr />";
	} finally{
		echo "Saldo Atual: {$conta->verSaldo()}";
	}