<!--login>-->


<!--Si no esta iniciado se ingresa cero>-->
<?php 
session_start();
if(!isset($_SESSION['error'])) {
  $_SESSION['error'] = 0;
}

if(!isset($_SESSION['registro'])) {
  $_SESSION['registro'] = 0;
}

if(!isset($_SESSION['error_contraseña'])) {
  $_SESSION['error_contraseña'] = 0;
}

include_once "config/funciones.php";
$conexion = conectar('','agrocost');
if (!empty($_SESSION['usuario'])) {
  $_SESSION['usuario'] = '';
}
 ?>



<!DOCTYPE html>
<html lang="en">
  <head>

    <link rel="stylesheet" type="text/css" href="pagina/css/login.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Iniciar Sesión | </title>
    <link rel="icon" href="images/sena.png" type="image/ico" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">
    <link href="../vendors/jquery/dist/jquery.min.js" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <style>
      
.yeimer {
  background: none;
  
}

    </style>
  </head>

  <body    style="background: #e9ecef;" class="login" >
     <!--onload="mueveReloj()"-->
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            
            <form method="post" action="app/validacion_login.php">
              <h1>AGROCOST</h1>
            <img src="images/sena.png" style="width: 50%; margin-left: -10px;" >
            <H1>Iniciar Sesión</H1>
            <?php 
              if ($_SESSION['error']==1) {
              
             ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
              Usuario y/o contraseña incorrectos
            </div>
            <?php 
              $_SESSION['error']=0;}
             ?>
              <div>
              
                <input type="text" class="form-control" required name="usuario" placeholder=" &#128272; Usuario" required="" />

              </div>


              <div>
                <input  type="password" id="txtPassword" name="clave"  required   class="form-control" placeholder=" &#128273; Contraseña" required=""  />
                
           <div >  <span onclick="mostrarPassword()" id="show_password" class="fa fa-3x fa-eye-slash icon"></div>
              
        </div>
        <br>

              <div>
                <a class="yeimer"><button type="submit" class="btn btn-warning">Entrar</button></a>
              <a href="1/index.html">¿Ólvide mi contraseña?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">No soy usuario aún?
                  <a href="#signup" class="to_register"> Crear mi cuenta </a>
                </p>

                
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form method="post" action="app/guardado_usuario.php" enctype="multipart/form-data">
              <h1>Registro de usuario</h1>
              <div>
                <label   >Por favor, Selecione un tipo de usuario</label>
              <select name="tipo_usuario" required />

              <option value="" selected="">Seleccione una opcion</option>

              <option value="Administrador">Administrador</option>

              <option value="Instructor">Instructor</option>

               <option value="Aprendiz">Aprendiz</option>

               </select>
                  <?php 
              if ($_SESSION['registro']==1) {
              
             ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
              Usuario y/o contraseña incorrectos
            </div>
            <?php 
              $_SESSION['registro']=0;}
             ?>
               <br>
               <br>
                <input type="text" class="form-control" name="nombre" required placeholder="Nombre completo" required/>
              </div>
              <div>
                <div>
                  <input type="text" class="form-control"  placeholder="usuario" name="usuario" required />
                </div>
                <input type="email" class="form-control" name="email"  placeholder="email" required="" />
              </div>
              <div>
                <?php if ($_SESSION['error_contraseña']==1) {echo '<div class="invalid-feedback">Las contraseñas no coiciden</div>';} ?>
                <input type="password" class="form-control <?php if ($_SESSION['error_contraseña']==1) {echo "is-invalid"; } ?>" name="clave" placeholder="contraseña" required>
              </div>
                <input type="password" class="form-control" name="clave2" placeholder="Confirmar coontraseña" required />
              <div>
                <div>
                    <label style="font-size: 30px;">Imagen de perfil</label>
                  </div>
                <div>
                  <input type="file" accept="image/*"  name="imagen" value="" required /><br>
                  
                </div>
                <a  href="index.html"><button type="submit" class="btn btn-success">Registrarme </button></a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">
Ya eres usuario?
                  <a href="#signin" class="to_register"> Iniciar Sesión </a>
                </p>

                <div class="clearfix"></div>
                <br />

              
              </div>

            </form>
          </section>
        </div>
      </div>
    </div>
  </body>


  <script language="JavaScript">
function mueveReloj(){
    momentoActual = new Date()
    hora = momentoActual.getHours()
    minuto = momentoActual.getMinutes()
    segundo = momentoActual.getSeconds()

    horaImprimible = hora +  " : " + minuto + " : " + segundo

    document.form_reloj.reloj.value = horaImprimible

    setTimeout("mueveReloj()",1000)
}
</script>
  <script type="text/javascript">
function mostrarPassword(){
    var cambio = document.getElementById("txtPassword");
    if(cambio.type == "password"){
      cambio.type = "text";
      $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
    }else{
      cambio.type = "password";
      $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
    }
  } 
  
  $(document).ready(function () {
  //CheckBox mostrar contraseña
  $('#ShowPassword').click(function () {
    $('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
  });
});
</script>

</html>
