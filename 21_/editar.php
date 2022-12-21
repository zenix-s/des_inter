<?php
if(!isset($_GET['codigo'])){
    header('Location: index.php');
}
$codigo = $_GET['codigo'];
include 'conexion.php';
$sql = $conexion->query("SELECT * FROM empleados WHERE cod_empresa = $codigo");
$resultado = $sql->fetch(PDO::FETCH_OBJ);
echo "<script>
        document.getElementById('nombre').value = '$resultado->nombre';
        document.getElementById('apellidos').value = '$resultado->apellidos';
        document.getElementById('edad').value = '$resultado->edad';
        document.getElementById('ciudad').value = '$resultado->ciudad';
        document.getElementById('profesion').value = '$resultado->profesion';
    </script>"
?>
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
                <form action="editar-proceso.php" method="POST" class="formulario">
                    <h1>Formulario Registro</h1>
                    <div class="container-inputs">
                        <div class="container-in">
                            <input type="text" name="nombre" id="nombre" placeholder=" " value="<?php echo $resultado->nombre ?>">
                            <label for="nombre">Nombre</label>
                        </div>
                        <div class="container-in">
                            <input type="text" name="apellidos" id="apellidos" placeholder=" " value="<?php echo $resultado->apellidos ?>">
                            <label for="apellidos">Apellidos</label>
                        </div>
                        <div class="container-in">
                            <input type="numeric" name="edad" id="edad" placeholder=" " min="0" value="<?php echo $resultado->edad ?>">
                            <label for="edad">Edad</label>
                        </div>
                        <div class="container-in">
                            <input type="text" name="ciudad" id="ciudad" placeholder=" " value="<?php echo $resultado->ciudad ?>">
                            <label for="ciudad">Ciudad</label>
                        </div>
                        <div class="container-in">
                            <input type="text" name="profesion" id="profesion" placeholder=" " value="<?php echo $resultado->profesion ?>">
                            <label for="profesion">Profesion</label>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $_GET['codigo'] ?>">
                    </div>
                    <div class="container-in">
                        <input type="submit" value="Editar " name="editar">
                    </div>
                </form>
            </div>
        </section>
    </main>

</body>

</html>