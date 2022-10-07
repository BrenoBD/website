<?php
	namespace models;

	class HomeModel extends Model
	{	//Chamar clientes:
		public static function pegarTeste(){
			$teste = \MySql::connect()->prepare("SELECT * FROM teste");
			$teste->execute();

			return $teste->fetchAll();
		}	
	}
?>