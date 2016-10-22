<?php

class Usuario{

	public $email;
	public $senha;

	public function cadastrarUsuario(){
		echo "<b><i>Cadastrando Usuario...</i></b>"."<br />";
		echo $this -> email."<br />";
		echo $this -> senha."<br />";
		echo "<hr />";
	}

	public function atualizarUsuario(){

	}
}

$usuario = new Usuario();
$usuario -> email = "email@4linux.com.br";
$usuario -> senha = "123456";
$usuario -> cadastrarUsuario();

$usuario2 = new Usuario();
$usuario2 -> email = "email2@4linux.com.br";
$usuario2 -> senha = "654321";
$usuario2 -> cadastrarUsuario();

