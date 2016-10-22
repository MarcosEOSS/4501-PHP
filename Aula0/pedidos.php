<?php

	interface FreteStrat{
		public function calcular();
	}

	class FreteNormal implements FreteStrat{

		public function calcular(){
			echo "<br />Frete Normal<hr />";
			return 10;
		}

	}

	class FreteExpresso implements FreteStrat{
		public function calcular(){
			echo "<br />Frete Expresso<hr />";
			return 20;
		}
	}

	class FreteTurbo implements FreteStrat{
		public function calcular(){
			echo "<br />Frete Turbo<hr />";
			return 30;
		}
	}

	class Pedido{

		public $freteStrat;
		public $totalPedido = 0;

		public function calcularTotalPedido(){
			echo "Pedido + Frete: R$ " . $this -> totalPedido += $this -> freteStrat . "<br />";

		}
	}

	$tipoFrete = "Expresso";

	switch ($tipoFrete) {
		case 'Normal':
			$freteStrat = new FreteNormal();
			break;

		case 'Expresso':
			$freteStrat = new FreteExpresso();
			break;

		case 'Turbo':
			$freteStrat = new FreteTurbo();
			break;
		
		default:
			echo "Frete Inexistente";
			break;
	}


	$pedido1 = new Pedido();
	$pedido1 -> totalPedido = 100;
	$pedido1 -> freteStrat = $freteStrat -> calcular();
	$pedido1 -> calcularTotalPedido();

	$pedido2 = new Pedido();
	$pedido2 -> totalPedido = 200;
	$pedido2 -> freteStrat = $freteStrat -> calcular();
	$pedido2 -> calcularTotalPedido();


	$pedido3 = new Pedido();
	$pedido3 -> totalPedido = 300;
	$pedido3 -> freteStrat = $freteStrat -> calcular();
	$pedido3 -> calcularTotalPedido();
