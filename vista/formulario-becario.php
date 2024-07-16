<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Iniciar sesion</title>
    <link rel="stylesheet" href="../css/estiloregistro.css" />
  </head>
  <body>
    <main>
      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">
            <form action="../controlador/control-becario.php"  method="POST" autocomplete="off" class="sign-in-form">
              <div class="logo">
                <img src="./img/logo.png" alt="easyclass" />
                <h4>workhub</h4>
              </div>

              <div class="heading">
                <h2>Bienvenido de regreso</h2>
                <h6>No estas registrado?</h6>
                <a href="#" class="toggle">Registrarse</a>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    type="text"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                    placeholder="Correo"
                    name="correo"
                  />
                </div>

                <div class="input-wrap">
                  <input
                    type="password"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                    placeholder="Contraseña"
                    name="contrasena"
                  />
                </div>

                <input type="submit" value="Iniciar Sesion" name="Iniciar" class="sign-btn" />

                <p class="text">
                  Olvidaste tu contrasena o correo?
                  <a href="#">Obten ayuda</a>
                </p>
              </div>
            </form>

            <form action="../controlador/control-becario.php" method="POST" autocomplete="off" class="sign-up-form">
    <div class="logo">
        <img src="./img/logo.png" alt="easyclass" />
        <h4>IntelCode</h4>
    </div>

    <div class="heading">
        <h2>Bienvenido</h2>
        <h6>Ya tienes una cuenta?</h6>
        <a href="#" class="toggle">Iniciar sesion</a>
    </div>

    <div class="actual-form">
        <div class="input-wrap">
            <input type="text" name="nombre" minlength="4" class="input-field" autocomplete="off" required />
            <label>Nombre</label>
        </div>

        <div class="input-wrap">
            <input type="email" name="correo" class="input-field" autocomplete="off" required />
            <label>Correo</label>
        </div>

        <div class="input-wrap">
    <i class="fas fa-lock"></i>
    <input type="password" class="input-field" placeholder="Contraseña" autocomplete="off" name="contrasena" id="contrasena" required />
</div>


        <div class="input-wrap">
            <input type="text" name="universidad" class="input-field" autocomplete="off" required />
            <label>Universidad</label>
        </div>

        <input type="submit" name="Registrar" value="Registrar" class="sign-btn" />

        <p class="text">
            Al Registrarse acepta los
            <a href="#">Terminos de servicio</a> y
            <a href="#">Politica de privacidad</a>
        </p>
    </div>
</form>

          </div>

          <div class="carousel">
            <div class="images-wrapper">
              <img src="../img/image1.png" class="image img-1 show" alt="" />
              <img src="../img/image2.png" class="image img-2" alt="" />
              <img src="../img/image3.png" class="image img-3" alt="" />
            </div>

            <div class="text-slider">
              <div class="text-wrap">
                <div class="text-group">
                  <h2>Oportunidades de empleo</h2>
                  <h2>Miles de opciones</h2>
                  <h2>Inicia una nueva etapa</h2>
                </div>
              </div>

              <div class="bullets">
                <span class="active" data-value="1"></span>
                <span data-value="2"></span>
                <span data-value="3"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- Javascript file -->
    <script src="../JS/app1.js"></script>
  </body>
</html>