<?php
	class BD{
		public static function ConnectBD(){
			try{
                            $conexao = new PDO("mysql:host=localhost;dbname=robocode;charset=utf8",'root','');
                            return $conexao;
			} catch(PDOException $e){
				throw new MyDatabaseException( $e->getMessage( ) , (int)$e->getCode( ) );	
			}
		}
	}
?>