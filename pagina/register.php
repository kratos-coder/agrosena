<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

        <div id="register" class="animate form registration_form">
          <a class="hiddenanchor" id="register.php"></a>
      <a class="hiddenanchor" id="signin"></a>
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
</body>
</html>