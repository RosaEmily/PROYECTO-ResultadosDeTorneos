<?php
class Conexion
{
	static public function conectar()
	{
		$servidor = "localhost";
		$user = "root";
		$pass = "";
		$db_name = "liga_futbol";

		$con=mysqli_connect($servidor,$user,$pass,$db_name) or die('No se pudo conectar a bd');

		return $con;
	}
}
?>