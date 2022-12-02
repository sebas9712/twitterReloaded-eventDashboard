<?php

function conectar_bd()
	{
		//conexion para servidor
		$conexion_bd = mysqli_connect("localhost:8888/", "root", "root", "Twitter_Db");

		echo "funciono";
		return $conexion_bd;
	} 

?>