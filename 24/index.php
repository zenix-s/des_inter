<?php
include_once "conexion.php";
$resultado = mysqli_query($conexion, "SELECT * FROM hotel");
if(isset($_POST["button-search"])){
    $busqueda = $_POST['search-text'];
    $consulta = "SELECT * FROM hotel WHERE codigo LIKE '$busqueda' || nhabitacion LIKE '$busqueda' || tipo LIKE '$busqueda' || estado LIKE '$busqueda' || fechaentrada LIKE '$busqueda' || fechasalida LIKE '$busqueda' || nnoches LIKE '$busqueda' || precionoche LIKE '$busqueda'";
    if ($busqueda == ""){
        $consulta = "SELECT * FROM hotel";
    }else{
        $resultado = mysqli_query($conexion, $consulta);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap-icons/bootstrap-icons.css">
</head>
<body>
    <header>
        <div id="search-container">
            <form action="index.php" method="post">
                <div id="form-search-container">
                    <input type="search" name="search-text">
                    <button id="button-search" name="button-search">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </form>
        </div>
    </header>
    <main>
        <section id="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Número de habitación</th>
                        <th>Tipo</th>
                        <th>Estado</th>
                        <th>Fecha de entrada</th>
                        <th>Fecha de salida</th>
                        <th>Número de noches</th>
                        <th>Precio por noche</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($reg=mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
                            echo "<tr>";
                            echo "<td>".$reg['codigo']."</td>";
                            echo "<td>".$reg['nhabitacion']."</td>";
                            echo "<td>".$reg['tipo']."</td>";
                            echo "<td>".$reg['estado']."</td>";
                            echo "<td>".$reg['fechaentrada']."</td>";
                            echo "<td>".$reg['fechasalida']."</td>";
                            echo "<td>".$reg['nnoches']."</td>";
                            echo "<td>".$reg['precionoche']."</td>";
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
        </section>
    </main>
</body>
</html>