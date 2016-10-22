<?php

class Conta{
	private $titular = "4Linux";



	public function getTitular(){
		return $this->titular;
	}

	public function __isset($name){
		echo "{$name} esta setado?<hr />";
		return isset($this->$name);
	}

	public function __unset($name){
		echo "Apagando {$name}...<hr />";
		unset ($this->$name);
	}

}

$conta = new Conta();
echo $conta->getTitular()."<br >";

var_dump(isset($conta->agencia));
unset($conta->titular);