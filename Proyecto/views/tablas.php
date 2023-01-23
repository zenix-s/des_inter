<?php
include_once "../conexion.php";
$resultado = mysqli_query($conexion, "SELECT * FROM hotel");

// if(isset($_POST["button-search"])){
//     $busqueda = $_POST['search-text'];
//     $consulta = "SELECT * FROM hotel WHERE codigo LIKE '$busqueda' || nhabitacion LIKE '$busqueda' || tipo LIKE '$busqueda' || estado LIKE '$busqueda' || fechaentrada LIKE '$busqueda' || fechasalida LIKE '$busqueda' || nnoches LIKE '$busqueda' || precionoche LIKE '$busqueda'";
//     if ($busqueda == ""){
//         $consulta = "SELECT * FROM hotel";
//     }else{
//         $resultado = mysqli_query($conexion, $consulta);
//     }
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto DI</title>
    <link rel="stylesheet" href="../styles/general_style.css">
    <link rel="stylesheet" href="../styles/tablas_style.css">
    <link rel="icon" href="../img/icon.svg">
</head>

<body>
    <header>
        <div class="icon_container">
            <a href="../index.php"><img src="../img/icon.svg" alt=""></a>
        </div>
    </header>
    <main>
        <section class="table_view_container">
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
                    while($reg = mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
                        echo "<tr>";
                            echo "<td data-label='codigo'>" . $reg['codigo'] . "</td>";
                            echo "<td data-label='Nº Habitación'>" . $reg['nhabitacion'] . "</td>";
                            echo "<td data-label='Tipo'>" . $reg['tipo'] . "</td>";
                            echo "<td data-label='Estado'>" . $reg['estado'] . "</td>";
                            echo "<td data-label='Fecha Entrada'>" . $reg['fechaentrada'] . "</td>";
                            echo "<td data-label='Fecha Salida'>" . $reg['fechasalida'] . "</td>";
                            echo "<td data-label='Nº Noches'>" . $reg['nnoches'] . "</td>";
                            echo "<td data-label='Codigo'>" . $reg['precionoche'] . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </section>
    </main>
</body>

</html>