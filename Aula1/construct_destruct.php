<?php

class Usuario{
	private $nome;
	private $email;

	public function __construct(array $dados){
		foreach ($dados as $index => $value){
			$this->$index = $value;
		}
	}
	/*public function __construct($name, $mail){
		$this->nome = $name;
		$this->email = $mail;
		
	}*/

	public function getNome(){
		return $this->nome;
	}

	public function getEmail(){
		return $this->email;
	}

	public function __destruct(){
		echo "<hr /> Objeto Destruido";
	}
}
$dados = array("nome" => "Marcos Eduardo","email" => "email@4linux.com.br");
//$usuario = new Usuario("Marcos Eduardo", "email@4linux.com.br");
$usuario = new Usuario($dados);
echo $usuario->getNome();
echo "<hr />";

unset($usuario);echo $usuario->getEmail();
unset($usuario); //destroi o objeto/variavel, etc. remete a funcao __destruct
echo "<hr />";
echo "Depois de destruido";
