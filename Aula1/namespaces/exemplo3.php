<?php

	namespace Caixa;
	class Conta{
		protected $banco = "Caixa";

		public function getBanco(){
			return $this->banco;
		}

	}

	namespace Itau;
	class Conta{
		protected $banco = "Itau";

		public function getBanco(){
			return $this->banco;
		}
	
	}

// DESTA FORMA, ESTAH INSTANCIADA A CLASSE DO NAMESPACE Itau
	/*$caixa = new Conta();
	echo "Banco: {$caixa->getBanco()} <hr />";*/


	$caixa = new \Caixa\Conta();
	echo "Banco: {$caixa->getBanco()} <hr />";

	$itau = new Conta();
	echo "Banco: {$itau->getBanco()} <hr />";
