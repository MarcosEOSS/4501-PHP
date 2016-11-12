<?php
	namespace Model;


	use Lib\Db;
	use Entity\UsuarioEntity;
	use PDO;
	class UsuarioModel{

		private $db;
	

		public function __construct(Db $db){
			$this->db = $db->getConn();
			
		}


		public function buscarUsuario(UsuarioEntity $usuario){

			$query= "SELECT login FROM usuarios2 WHERE login = :login AND senha= :senha";
			$stmt = $this->db->prepare($query);
			$stmt->bindValue(':login',$usuario->getLogin());
			$stmt->bindValue(':senha',$usuario->getSenha());

			$stmt->execute();

			if($stmt->rowCount()){
				$logado = $stmt->fetch(PDO::FETCH_OBJ);
				print_r($logado);
				return $logado;
			}else{
				echo"Usuario ou senha invalido<br /> <input type='button' value='Voltar' onClick='history.go(-1)'/>";

			}

			
		}
	}

