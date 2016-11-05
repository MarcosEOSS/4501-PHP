<?php

	require_once '../mysql.php';
	$pdo = ConnMYSQL::conectar();
	
	echo "<pre>";
	print_r($_POST);
	echo "<hr \>";
	
	$query  = "INSERT INTO usuarios (nome,   email, senha) VALUES (:nome, :email, :senha)";
	
	$stmt = $pdo->prepare($query);
	
	$vars = array(':nome' => $_POST['nome'], ':email' => $_POST['email'], ':senha' => $_POST['senha']);
	
	foreach ($vars as $index => $values){
		
		$stmt->bindValue($index, $values);
		
	}
	
	
	if($stmt->execute()){
		
		echo "Usuario cadastrado com sucesso";
		
	}else{
		
		echo "Erro ao cadastrar usuario";
		
	}
	
