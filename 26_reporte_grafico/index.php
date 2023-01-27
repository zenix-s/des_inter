<?php

$conexion = mysqli_connect('localhost', 'root', '', 'prueba') or die("No se ha podido conectar al servidor de Base de datos");
$db = mysqli_select_db($conexion, 'prueba') or die("Error no se ha podido conectar a la base de datos");

// consulta a la base de datos
$consulta = "SELECT * FROM ventas";
$resultado = mysqli_query($conexion, $consulta);



?>
<!DOCTYPE HTML>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Highcharts Example</title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <style type="text/css">
        /* ${demo.css} */
    </style>
    <script type="text/javascript">
        $(function() {
            $('#container').highcharts({
                chart: {
                    type: 'pie',
                    // options3d: {
                    //     enabled: true,
                    //     alpha: 45,
                    //     beta: 0
                    // }
                },
                title: {
                    text: 'Número de ventas por vendedor'
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        depth: 35,
                        dataLabels: {
                            enabled: true,
                            format: '{point.name}'
                        }
                    }
                },
                // A partir de aquí se modifican los datos
                series: [{
                    type: 'pie',
                    name: 'Ventas por vendedor',
                    data: [
                        // recorrido consulta a la base de datos
                        <?php
                        while ($fila = mysqli_fetch_array($resultado)) {
                            echo "['" . $fila['nombre'] . "'," . $fila['ventas'] . "],";
                        }
                        ?>
                    ]
                }]
            });
        });
    </script>
</head>

<body>

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/highcharts-3d.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>

    <main>
        <div class="form_container">
            <form action="insertar_vendedor.php" method="POST" class="formulario" autocomplete="off">
                <h2>Insertar Vendedor</h2>
                    <div class="input_container">
                        <input type="text" name="nombre" id="nombre" placeholder=" " value="" autocomplete="off">
                        <label for="nombre">Vendedor</label>
                    </div>
                    <div class="input_container">
                        <input type="text" name="ventas" id="ventas" placeholder=" " value="" autocomplete="off">
                        <label for="ventas">Cantidad</label>
                    </div>
                    <div class="input_container">
                        <input type="submit" value="Subir" name="insertar">
                    </div>
            </form>
        </div>
        <div class="chart_container">
            <div id="container" style="height: 400px"></div>
        </div>
    </main>

</body>

</html>