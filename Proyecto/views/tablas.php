<?php
include_once "../conexion.php";
$resultado = mysqli_query($conexion, "SELECT * FROM libros");
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
    <link rel="stylesheet" href="../icons/bootstrap-icons.css">
</head>

<body>
    <header id="header">
        <div class="icon_container">
            <a href="../index.php"><img src="../img/icon.svg" alt=""></a>
        </div>
    </header>
    <main>
        <section class="table_view_container">
            <table>
                <thead>
                    <tr>
                        <th>ISBN</th>
                        <th>Autor</th>
                        <th>Titulo</th>
                        <th>Editorial</th>
                        <th>Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while($reg = mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
                        echo "<tr>";
                            echo "<td data-label='ISBN'>" . $reg['ISBN'] . "</td>";
                            echo "<td data-label='Autor'>" . $reg['AUTOR'] . "</td>";
                            echo "<td data-label='Titulo'>" . $reg['TITULO'] . "</td>";
                            echo "<td data-label='EDITORIAL'>" . $reg['EDITORIAL'] . "</td>";
                            echo "<td data-label='FECHA'>" . $reg['FECHA'] . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </section>
        <a href="#header" class="up_button"><i class="bi bi-arrow-up-circle-fill"></i></a>
    </main>
</body>

</html>