<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar sesión</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/f258963afa.js" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
  <style>
    form {
      width: 80%;
      padding-top: 5px;
      padding-left: 25px
    }

    input {
      margin-bottom: 7px
    }
  </style>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary text-right">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <h3 class="mx-3 text-white">Iniciar Sesión</h3>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
          <ul class="navbar-nav ">
            <li class="nav-item"><a class="nav-link text-white" href="">REGISTRARSE</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <hr>
  <div class="container pt-1">
    <div class="row py-5 bg-secondary text-white">
      <div class="col-md-3 mx-3">
        <form class="formulario" method="post" action="loginProceso.php">
          <div class="form-group mb-3">
            <label>Nombre de usuario</label>
            <input type="text" name="txtUsuario" placeholder="Usuario">
          </div>
          <div class="form-group mb-3">
            <label>Contraseña</label>
            <input type="password" name="txtContra" placeholder="Contraseña">
          </div>
          <div class="mb-3">
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="recordar">
              <label class="form-check-label" for="recordar">
                Recordar datos
              </label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Iniciar sesión</button>
        </form>
      </div>
    </div>
  </div>
  <hr>
  <footer id="footer">
    <div class="container-fluid bg-primary pt-5 pb-5">
      <div class="row text-center">
        <div class="col-md-12">
          <h4 class="text-white text-center">COPYRIGHT DESARROLLO DE INTERFACES </h4>
          <h5 class="text-white text-center">SIGUENOS</h5>
          <a class="btn btn-social-icon btn-twitter">
            <span class="fa fa-twitter"> Twitter</span>
          </a>
          <a class="btn btn-social-icon btn-facebook">
            <span class="fa fa-facebook"> Facebook</span>
          </a>
          <a class="btn btn-social-icon btn-instagram">
            <span class="fa fa-instagram"> Instagram</span>
          </a>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>