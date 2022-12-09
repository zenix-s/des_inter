<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <title>Formulario_registros</title>
  <link rel="stylesheet" href="lb/css/bootstrap.min.css" />
  <style>
    .ancho {
      width: 50%
    }
  </style>

</head>

<body>
  <section id="navegacion">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="logotipo.jpg" style="width: 100px; height: 80px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#" style="color: crimson; font-weight: bolder; font-size: 14pt">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" style="color: crimson; font-weight: bolder; font-size: 14pt">Registrar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true" style="color: crimson; font-weight: bolder; font-size: 14pt">Cerrar</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Palabra busqueda" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Buscar</button>
          </form>
        </div>
      </div>
    </nav>

  </section>
  <div class="row">

    <div class="col-sm-12 col-md-4 mx-2">
      <form action="insertar.php" method="post">
        <h2 class="text-center text-danger">CREA TU CUENTA</h2>
        <div class="mb-3 mt-3">
          <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
        </div>
        <div class="mb-3 mt-3">
          <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos">
        </div>
        <div class="mb-3 mt-3">
          <input type="text" class="form-control" id="correo" name="correo" placeholder="Correo">
        </div>
        <div class="mb-3 mt-3">
          <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario">
        </div>
        <div class="mb-3 mt-3">
          <input type="password" class="form-control" id="clave" name="clave" placeholder="Contraseña">
        </div>
        <div class="mb-3 mt-3">
          <input type="text" id="telefono" class="form-control" name="telefono" placeholder="Telefono">
        </div>
        <div class="mb-3 mt-3 d-flex justify-content-center">
          <input class="btn btn-primary btn-lg" type="submit" name="insertar" value="Registrar">
        </div>
        <p class="form-link">¿Ya tienes una cuenta?<a href="#">Ingresa aqui</a></p>

      </form>
    </div>
    <div class="col-sm-12 col-md-7">
      <h2 class="text-center">Listado de Usuarios</h2>

      <table style="width: 80%; border: 2px double #454545;">

        <tr>
          <td>Código</td>
          <td>Nombres</td>
          <td>Apellidos</td>
          <td>Correo</td>
          <td>Usuario</td>
          <td>Contraseña</td>
          <td>Telefono</td>

        </tr>

        <!-- TABLA DINAMICA -->
        <?php
        require('conexion.php');
        $sql = $mbd->query("SELECT * FROM registros");
        $resultado = $sql->fetchAll(PDO::FETCH_OBJ);
        foreach ($resultado as $datos) {
        ?>

          <tr>
            <td><?php echo $datos->id_registro; ?></td>
            <td><?php echo $datos->nombre; ?></td>
            <td><?php echo $datos->apellidos; ?></td>
            <td><?php echo $datos->correo; ?></td>
            <td><?php echo $datos->usuario; ?></td>
            <td><?php echo $datos->clave; ?></td>
            <td><?php echo $datos->telefono; ?></td>

          </tr>

        <?php
        }
        ?>
      </table>
    </div>



  </div>
  <script src="lb/js/bootstrap.min.js"> </script>
</body>

</html>