    <?php

    //$bd->exec("SET CHARACTER SET utf8");
    include 'conexion.php';
    $sql = $bd->query("SELECT * FROM evaluaciones;");
    $resultado = $sql->fetchAll(PDO::FETCH_OBJ);

    ?>



    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Interfaz Alumnos</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
        <style>
            form {
                width: 80%;
                padding-top: 5px
            }

            tr,
            td {
                text-align: center
            }

            input {
                margin-bottom: 7px
            }

            .fondo {
                background: URL(imagenes/fondo.png)
            }
            .table a {
                color: rgb(0, 0, 0) !important;
                border: 1px solid rgb(0, 0, 0);
                padding: 5px 10px;
                border-radius: 5px;
                text-decoration: none;
            }
            .table a:hover {
                color: rgb(255, 255, 255) !important;
                background: rgb(0, 0, 0);
            }
        </style>
    </head>

    <body>
        <header>
            <!--NAVEGACION-->
            <nav class="navbar navbar-expand-lg navbar-light bg-secondary text-rigth">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <img src="logotipo.png" class="img-fluid" style="width: 80px; height: 80px">
                <h3 class="mx-3 text-white">App Grado DAM</h3>

                <div class="collapse navbar-collapse " id="navbarNavAltMarkup"></div>
                <div class="card text-center border-primary">
                    <div class="card-body">
                        <form action="buscador.php" method="GET">
                            <input type="search" name="buscar" placeholder="Introduzca frase" style="padding: 0 10px; width: 60%;">
                            <button type="submit" class=" btn-outline-success  border-success">Buscar </button>
                        </form>
                    </div>
                </div>

                <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                    <div class="navbar-nav ">

                        <a class="nav-item nav-link active text-white " href="#"> INICIO<span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link text-white" href="#">NOSOTROS</a>
                        <a class="nav-item nav-link text-white" href="#">ENTRAR</a>
                        <a class="nav-item nav-link text-white" href="#">REGISTRARSE</a>


                    </div>
                </div>
            </nav>
        </header>

        <section>
            <hr>
            <div class="row  px-5">
                <div class="col-md-8">
                    <hr>
                    <!--Comenzamos a mostrar los datos-->
                    <h2>Listado de Alumnos</h2>
                    <table class="table" style="font-size: 8pt">
                        <tr>
                            <td>Código del Alumno</td>
                            <td>Primer Apellido</td>
                            <td>Segundo Apellido</td>
                            <td>Nombre</td>
                            <td>Examen Parcial</td>
                            <td>Examen Final</td>
                            <td>Promedio</td>
                            <td>Editar</td>
                            <td>Eliminar</td>
                        </tr>
                        <?php
                        foreach ($resultado as $datos) {
                        ?>
                            <tr>
                                <td><?php echo $datos->id_alumno; ?></td>
                                <td><?php echo $datos->primer_apellido; ?></td>
                                <td><?php echo $datos->segundo_apellido; ?></td>
                                <td><?php echo $datos->nombre; ?></td>
                                <td><?php echo $datos->examen_parcial; ?></td>
                                <td><?php echo $datos->examen_final; ?></td>
                                <td><?php echo ($datos->examen_parcial + $datos->examen_final) / 2; ?></td>
                                <td><a href="editar.php?id=<?php echo $datos->id_alumno; ?>">Editar</a></td>
                                <td><a href="eliminar.php?id=<?php echo $datos->id_alumno; ?>">Eliminar</a></td>

                            </tr>
                        <?php
                        }
                        ?>
                    </table>


                </div>
                <div class="col-md-4">

                    <!--Comienza INSERTAR REGISTROS-->
                    <h3 style="font-size: 12pt">Ingresar Nuevos Alumnos</h3>
                    <form method="POST" action="insertar.php" class="fondo" style="margin-left: 10px; font-size: 10pt; font-weight: bold">
                        <table>
                            <tr>
                                <td>Primer Apellido</td>
                                <td><input type="text" name="txtPaterno" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Segundo Apellido</td>
                                <td><input type="text" name="txtMaterno" class="form-control"></td>
                            </tr>
                            <td>Nombre</td>
                            <td><input type="text" name="txtNombre" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Nota Parcial</td>
                                <td><input type="text" name="txtParcial" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Nota Final</td>
                                <td><input type="text" name="txtFinal" class="form-control"></td>
                            </tr>
                            <input type="hidden" name="oculto" value="1">
                            <tr>
                                <td colspan="2" class="text-center">
                                    <input type="submit" name="" value="INGRESAR ALUMNOS" class="btn btn-default bg-dark mt-5" style="color: white">
                                </td>
                            </tr>
                        </table>


                    </form>
                </div>
                </hr>
            </div>
        </section>

    </body>

    </html>