<?php 

include_once "../config/funciones.php";

session_start();

$tipo_usuario = $_POST['tipo_usuario'];
$nombre_completo = $_POST['nombre'];
$usuario = $_POST['usuario'];
$email= $_POST['email'];
$claveorigi = $_POST['clave'];
$clave = password_hash($claveorigi, PASSWORD_DEFAULT);
$clave2 = $_POST['clave2'];
$image = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));


if ($clave2 != $claveorigi) {

	
	header('Location: ../../../agrosena/pagina/index.php');

	$_SESSION['error_contraseña'] =1;

}else {

	$conexion = conectar('','agrocost');


	$consulta = consulta($conexion, "INSERT INTO usuarios (nombre, nombre_usuario, email, clave, tipo_usuario, imagenes) VALUES ('{$nombre_completo}', '{$usuario}', '{$email}', '{$clave}','{$tipo_usuario}','{$image}')"); 

	if ($consulta) {

		header('Location: ../../../agrosena/pagina/index.php');

		$_SESSEION['registro'] =1;
	}
}



 ?>