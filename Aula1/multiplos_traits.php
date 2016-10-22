<?php

trait CRUD_Usuario{
	public function cadastrarUsuario(){
		echo "<hr /> Cadastrando Usuario....<hr />";
	}

	public function apagarUsuario(){
		echo "<hr /> Excluindo Usuario....<hr />";
	}

	public function validarCPF(){
		echo "<hr /> Validando CPF<hr />";
	}
}

trait Validacoes{
	public function validarCPF(){
		echo "<hr /> Validando CPF na trait validacoes<hr />";
	}

		public function validarEmail(){
		echo "<hr /> Validando e-mail<hr />";
	}
}

class Usuario{

	use CRUD_Usuario, Validacoes{
		Validacoes::validarCPF insteadof CRUD_Usuario;
	}
}

$obj = new Usuario();
$obj -> cadastrarUsuario();
$obj -> apagarUsuario();
$obj -> validarCPF();
$obj -> validarEmail();
