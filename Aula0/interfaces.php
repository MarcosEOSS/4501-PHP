<?php

	interface InterfaceTV{

		public function aumentarVolume();
		public function abaixarVolume();
		public function avancarCanal();
		public function retrocederCanal();
		public function ligar();
		public function desligar();

	}

	class TV implements InterfaceTV{
	
	public $volume = 10;
	public $canal = 5;
	public $status = "off";

		public function aumentarVolume(){
		echo "Volume anterior: {$this -> volume}<br />";
		++$this -> volume;
		echo "Volume aumentado para: {$this -> volume}<br />";
		}

		public function abaixarVolume(){
		echo "Volume anterior: {$this -> volume}<br />";
		--$this -> volume;
		echo "Volume aumentado para: {$this -> volume}<br />";
		}

		public function avancarCanal(){
		echo "Canal anterior: {$this -> canal}<br />";
		++$this -> canal;
		echo "Volume aumentado para: {$this -> canal}<br />";
		}

		public function retrocederCanal(){
		echo "Canal anterior: {$this -> canal}<br />";
		--$this -> canal;
		echo "Volume aumentado para: {$this -> canal}<br />";
		}

		public function ligar(){
		$this -> status = "ON";
		echo "TV: {$this -> canal}<br />";
		}

		public function desligar(){
		$this -> status = "OFF";
		echo "TV: {$this -> canal}<br />";
		}
	}

$tv = new TV();
$tv -> aumentarVolume();
$tv -> abaixarVolume();
$tv -> avancarCanal();
$tv -> retrocederCanal();
$tv -> ligar();
$tv -> desligar();

