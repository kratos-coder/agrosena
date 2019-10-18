<?php 
//Recibimos las dos variables
$usuario=$_POST["usuario"];
$password=$_POST["password"];



/* Realizamos una consulta por cada tabla para buscar en que tabla se encuentra 
el usuario que está intentando acceder */
$alumno = mysql_query("SELECT * FROM alumnos WHERE alumno = '$usuario' AND password = '$password'");
$profesor = mysql_query("SELECT * FROM profesores WHERE profesor = '$usuario' AND password = '$password'");
$director = mysql_query("SELECT * FROM directores WHERE director = '$usuario' AND password = '$password'")



/* Sabemos que en el caso que exista el usuario se encontrará en una de estas 
tres tablas, por lo tanto se guardará en alguno de nuestras tres variables 
que guardan nuestra consulta */
 
/* Ahora comprobamos que variable contiene al usuario*/
if(mysql_num_rows($alumno) > 0) 
{
    /* Si entra en este if significa que el que intenta acceder es un alumno, 
    por lo tanto le creamos una sesión */
    session_start();
 
    $_SESSION['alumno']="$usuario";
 
    /* Nos dirigimos al espacio de los alumnos usando header que nos 
    redireccionará a la página que le indiquemos */
    header("Location: alumnos/espacioalumno.php");
 
    /* terminamos la ejecución ya que si redireccionamos ya no nos interesa 
    seguir ejecutando código de este archivo */
    exit(); 
}
 
/* Ahora comprobamos si el que intenta acceder es un profesor */
else if(mysql_num_rows($profesor) > 0) 
{
    session_start();
    $_SESSION['profesor']="$usuario";
    header("Location: entrenador/espacioentrenador.php");
    exit(); 
}
 
//comprobamos si es un director el que intenta abrir la sesión
else if(mysql_num_rows($director) > 0) 
{
    session_start();
    $_SESSION['director']="$usuario";
    header("Location: administrador/espacioadministrador.php");
    exit();
} 
else 
{
   /* Si no el usuario no se encuentra en ninguna de las tres tablas 
   imprime el siguiente mensaje */
   $mensajeaccesoincorrecto = "El usuario y la contraseña son incorrectos, por favor vuelva a introducirlos.";
   echo $mensajeaccesoincorrecto; 
 ?>