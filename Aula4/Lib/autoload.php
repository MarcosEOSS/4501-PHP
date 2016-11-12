<?php

	function autoload($classe){
		
		//echo $classe ."<br />";
		
		
		
		//$arq = $classe . ".php";
		//$arq = str_replace('\\','/',$classe). '.php';
		$arq = str_replace('\\',DIRECTORY_SEPARATOR,$classe). '.php';
		//Constante DIRECTORY_SEPARATOR retorna o separador de diretorio do SO
		

		
		if(file_exists($arq)){
			
			require($arq);
			
		}else{
			
			echo "Essa classe nao existe";
			
		}
		
		
		
	}
	
	spl_autoload_register('autoload');
	
	