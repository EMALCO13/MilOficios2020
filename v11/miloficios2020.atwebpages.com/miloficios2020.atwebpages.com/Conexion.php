	<?php
	//namespace Espacio\De\Nombres;
	class Conexion {

		static private $instance;
		
		/**
		* @return PDO Return a PDO instance representing a connection to a database
		*/
		public static function getConexion() {
			
			if(self::$instance == NULL){           
				$PDOinstance = new PDO("mysql:host=fdb26.awardspace.net;dbname=3396975_miloficios2020;charset=utf8", "3396975_miloficios2020", "B{S8-oc/5un(1zdE");
				$PDOinstance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				self::$instance = $PDOinstance;
			}
			return self::$instance;
			
		}
		
	}
