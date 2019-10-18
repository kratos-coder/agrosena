<?php

function conectar($clave,$Bdatos){

	$conexion = new mysqli('localhost','root',$clave,$Bdatos);

	if($conexion->connect_error){

		die('Error de Conexión (' . $mysqli->connect_errno .') ' . $mysqli->connect_error);
	} 

	return $conexion;
}

// Funcion consulta

function consulta($conexion,$consulta){

	$resultado = $conexion->query($consulta);
	if(!$resultado){

		 echo "No se pudo ejecutarla consulta, error en la inportacion de la base de datos".$conexion->error;
  		exit;
	}

	return $resultado;
}
         ?>


        