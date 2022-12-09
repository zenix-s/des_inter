<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <section class="container">
            <div>
                <form action="registrar.php" method="post" class="formulario">
                    <h1>Formulario Registro</h1>
                    <div class="container-inputs">

                        <div class="container-in">
                            <input type="text" name="nombre" id="nombre" placeholder=" ">
                            <label for="nombre">Nombre</label>
                        </div>
                        <div class="container-in">

                            <input type="text" name="apellidos" id="apellidos" placeholder=" ">
                            <label for="apellidos">Apellidos</label>
                        </div>
                        <div class="container-in">

                            <input type="numeric" name="edad" id="edad" placeholder=" " min="0">
                            <label for="edad">Edad</label>
                        </div>
                        <div class="container-in">

                            <input type="text" name="ciudad" id="ciudad" placeholder=" ">
                            <label for="ciudad">Ciudad</label>
                        </div>
                        <div class="container-in">

                            <input type="text" name="profesion" id="profesion" placeholder=" ">
                            <label for="profesion">Profesion</label>
                        </div>

                    </div>

                    <div class="container-in">
                        <input type="submit" value="Enviar" name="enviar">
                    </div>
                </form>
            </div>
        </section>
        <section class="container">
            <table class="tabla">
                <thead>
                    <tr>
                        <th>Codigo Empresa</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Edad</th>
                        <th>Ciudad</th>
                        <th>Profesion</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'conexion.php';
                    $conexion->exec("SET CHARACTER SET utf8");
                    $sql = $conexion->query("SELECT * FROM empleados");
                    $resultado = $sql->fetchAll(PDO::FETCH_OBJ);
                    foreach ($resultado as $x) {
                        echo "<tr>";
                        echo "<td>" . $x->cod_empresa . "</td>";
                        echo "<td>" . $x->nombre . "</td>";
                        echo "<td>" . $x->apellidos . "</td>";
                        echo "<td>" . $x->edad . "</td>";
                        echo "<td>" . $x->ciudad . "</td>";
                        echo "<td>" . $x->profesion . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </section>



    </main>
</body>

</html>