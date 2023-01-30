<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aplicación Multimedia</title>
  <link rel="stylesheet" href="lb/css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/all.min.css" />
  <style>
    .fondo1 {
      background: url(img/fondo-triangulos.webp);
      background-size: cover
    }

    .colorLogoVerde {
      background-color: #008e97;
    }

    .colorLogoNaranja {
      background-color: #f58220
    }


    .perstxt {
      font-family: monospace
    }

    .error {
      color: #ff0000;
    }

    @media(max-width: 576px) {
      .perstxt {
        font-size: 15px
      }
    }

    thead:nth-child(1) {
      background: #f58220;

    }

    .copy {
      font-size: 50px;
      color: orange
    }

    .selectcateg {
      width: 100%;
      background-color: #ffffff;
      padding: 7px;
      border: 1px solid #00000030;
      border-radius: 6px;
      color: #000000;
    }
  </style>
</head>

<body>
  <!--BARRA DE NAVEGACION-->
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <!--icono app-->
        <a class="navbar-brand" href="#"><img src="img/logoDM_web.png" class="img-fluid" style="width: 40%"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Interface Multimedia</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Nosotros</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Registro
              </a>

            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Cerrar</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Buscar</button>
          </form>
        </div>
      </div>
    </nav>
  </div>

  <!------------------------------->
  <!--CUERPO DE LA INTERFAZ-->
  <main class="container-fluid fondo1">
    <!--la capa superior de la interfaz-->
    <div class="row">
      <div class="row d-flex justify-content-center align-items-center">
        <div class="col-sm-12 col-md-4 mt-3">
          <form method="post">
            <h5 for="form-File" class="form-label pt-2 mb-3 text-center text-dark">
              SUBIR ARCHIVOS A LA BASE DE DATOS
            </h5>
            <input class="form-control" type="text" placeholder="Nombre del Archivo" arial-label="default input example">
            <div class="col-12 d-flex justify-content-center mt-2 mb-3">
              <button type="submit" class="shadow rounded border colorLogoNaranja text-white">
                EXAMINAR
              </button>
            </div>
          </form>

        </div>
        <!--formulario para eliminar archivos-->
        <div class="col-sm-12 col-md-4 mt-3 align-items-center">
          <form method="post" action="insertar.php">
            <h5 for="form-File" class="form-label pt-2 mb-3 text-center text-dark">
              ELIMINAR ARCHIVOS DUPLICADOS
            </h5>
            <input class="form-control" type="text" placeholder="Nombre del Archivo" arial-label="default input example">
            <div class="col-12 d-flex justify-content-center mt-2 mb-3">
              <button type="submit" class="shadow rounded border colorLogoNaranja
                  text-white"> ELIMINAR</button>
            </div>
          </form>

        </div>
        <!--formulario registro-->
        <div class="col-sm-12 col-md-4">
          <div class="mb-3">
            <form method="post" action="registrar.php">
            
              <label for="exampleFormControlInput1" class="form-label" id="nombre-label">Nombre <span id="spn-nombre">*</span></label>
              <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombres" data-valid="true">
              
              <label for="exampleFormControlInput1" class="form-label">Apellidos <span id="spn-apellidos">*</span></label>

              <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos" data-valid="false">

              <label for="exampleFormControlInput1" class="form-label">Dirección de correo <span id="spn-correo">*</span></label>

              <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo" data-valid="true">
          </div>
          <h6>Categoria</h6>

          <!-- SELECT CATEGORIA INICIO -->
          <select name="categoria" id="selectorcategoria" class="selectcateg">
            <option value="" style="display: none;" selected>---</option>
            <option value="poductos">Productos</option> 
            <option value="servicios">Servicios</option>
          </select>
          <!-- SELECT CATEGORIA FIN -->
          <div class="col-12 d-flex justify-content-center mt-2 mb-3">
            <button type="submit" name="registrar" class="shadow rounded border colorLogoNaranja text-white">
              REGISTRAR
            </button>
          </div>

          </form>
        </div>
      </div>
      <!---->

    </div>
    <!--tabla para mostrar los datos de la bdatos-->
    <div class="container fondo2">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Identificador</th>
            <th scope="col">Nombre</th>
            <th scope="col">Imagen</th>

          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!--Pie de aplicación-->
    <div class="row align-items-center">
      <div class="col-sm-12 col-md-4">
        <i class=" copy fa-sharp fa-solid fa-copyright"></i> COPYRIGHT APP financiada por UE
        <div class="row pt-5">
          <div class="col">
            <i class="copy fa-brands fa-facebook"></i>
          </div>
          <div class="col">
            <i class="copy fa-brands fa-instagram"></i>
          </div>
          <div class="col">
            <i class="copy fa-brands fa-twitter"></i>
          </div>

          <div class="col">
            <i class="copy fa-brands fa-youtube"></i>
          </div>
        </div>

      </div>
      <div class="col-sm-12 col-md-8">
        <div class="row">

          <div class="col">
            <img src="img/comunidadMadrid.jpg" style="width: 50%">
          </div>
          <div class="col">
            <img src="img/españa.png" style="width: 25%">
          </div>
        </div>
        <div class="row mt-5">
          <div class="col">
            <img src="img/madrid.png" style="width: 50%">
          </div>
          <div class="col">
            <img src="img/uea.png" style="width: 25%">
          </div>
        </div>
      </div>

    </div>


  </main>


  <!--FIN DEL CUER`PO DE LA INTERFAZ-->

  <script src="lb/js/bootstrap.min.js"></script>
  <script src="valid.js"></script>
</body>

</html>