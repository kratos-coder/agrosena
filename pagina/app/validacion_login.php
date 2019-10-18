<?php 
session_start();
include_once "../config/funciones.php";

$usuario = $_POST['usuario'];
$conexion = conectar('','agrocost');

$consulta = consulta($conexion, "SELECT * FROM usuarios");

 if($consulta->num_rows>0){
 	while ($fila = $consulta->fetch_object()) {
 		if(password_verify($_POST['clave'], $fila->clave) && $usuario==$fila->nombre_usuario){
 			$_SESSION['usuario']=$fila->nombre_usuario;
         header('Location: ../../../agrosena/pagina/inicio.php');

 		}else{
           $_SESSION['error'] = 1;
             header('Location: ../../../agrosena/pagina/index.php');
           }
 		}
 } else {
 	header('Location: ../../../agrosena/pagina/index.php');
 	$_SESSION['error'] = 1;
 }





 ?>