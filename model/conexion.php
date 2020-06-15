<?php
class Conexion{
	public function conectar(){
		$link = new PDO("mysql:host=localhost;dbname=sgi","dcdvoqzc_admin","Dcdvoqzc@sytem88");
		//$link = new PDO("mysql:host=localhost;dbname=sqi","dcheco","dcheco");
		$link->exec("set names utf8");
		return $link;
	}
}
?>

