<?php
class Conexion{

	public function conectar(){

		$link = new PDO("mysql:host=localhost;dbname=wienerst_web",
						"wienerst_web",
						"W86c9x6xg6$",
						array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		                      PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
						);

		return $link;

	}


}


