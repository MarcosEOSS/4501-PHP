<?php

	require '../Aula03/pdo/mysql.php';
	
	$pdo = ConnMySQL::conectar();
	
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$pdo->beginTransaction();
	
	try{

		for($i = 0; $i <=5; $i++){
			
			if($i == 5){
					
				$pdo->exec("akjasghdkajdgh");
					
			}else{
			
				$pdo->exec("INSERT INTO usuarios (nome, email, senha) VALUES ('Usuario $i Transaction', 'transaction$i@4linux.com.br', '123456')");
			
			}
		
		}
		
		//Nenhum erro, pode execultar o codigo
		$pdo->commit();
		
		
	}catch (PDOException $e){

		echo $e->getCode();
		echo "<br>";
		echo $e->getMessage();
		
		//Deu erro em algum exec, cancela todos os anteriores
		$pdo->rollback();
		
	}
	
	
	
	 
	 
	 
	