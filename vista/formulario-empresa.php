<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="../css/estiloregistroempresa.css" />
    <title>Iniciar Sesion</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="../controlador/control-empresa.php" method="POST" class="sign-in-form">
            <h2 class="title">Bienvenido</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="email" placeholder="Correo" name="correo" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Contraseña" name="contrasena"/>
            </div>
            <input type="submit" value="Iniciar Sesion" name="Iniciar" class="btn solid" />
            <p class="social-text">O inicie sesión en plataformas sociales</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          <form action="../controlador/control-empresa.php" method="POST" class="sign-up-form">
            <h2 class="title">Registrarse</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Nombre Empresa" name="nombreE" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Correo" name="correoE" required/>
            </div>
            <div class="input-field">
    <i class="fas fa-lock"></i>
    <input type="password" placeholder="Contraseña" name="contrasenaE" id="contrasenaE" pattern="(?=.[A-Z])(?=.[0-9])(?=.[!@#$%^&()_+={}\[\]:;<>,.?/~]).{8,}" title="Debe contener al menos 8 caracteres, una letra mayúscula, un número y un carácter especial" required />
</div>

            <div class="input-field">
            <i class="fas fa-map-marker-alt"></i>

              <input type="text" placeholder="Ubicación" name="ubicacion" required/>
            </div>
            <input type="submit" class="btn" value="Registrar" name="Registrar" />
            <p class="social-text">O Registrese con plataformas sociales</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>No tienes una cuenta ?</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
              ex ratione. Aliquid!
            </p>
            <button class="btn transparent" id="sign-up-btn">
             Registrarse
            </button>
          </div>
          <img src="../img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Ya tienes una cuenta ?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              laboriosam ad deleniti.
            </p>
            <button class="btn transparent" id="sign-in-btn">
             Iniciar Sesion
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="../JS/app.js"></script>
  </body>
</html>