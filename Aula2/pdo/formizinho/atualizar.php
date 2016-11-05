<?php

	require_once '../mysql.php';
	$pdo = ConnMYSQL::conectar();
	
	echo "<pre>";
	print_r($_POST);
	echo "<hr \>";
	
	$query  = "UPDATE usuarios SET (nome = :nome, email = :email, senha = :senha) WHERE  id = :id;";
	
	$stmt = $pdo->prepare($query);
	
	$vars = array(':nome' => $_POST['nome'], ':email' => $_POST['email'], ':senha' => $_POST['senha'], ':id' => $_GET['id']);
	
	foreach ($vars as $index => $values){
		
		$stmt->bindValue($index, $values);
		
	}
	
	
	if($stmt->execute()){
		
		echo "Usuario atualizado com sucesso";
		
	}else{
		
		echo "Erro ao atualizar usuario";
		
	}
	
