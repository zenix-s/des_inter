<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe Grafico</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <style type="text/css">
        #container {
            height: 400px;
            min-width: 310px;
            width: 100%;
            margin: 0 auto;
        }
    </style>
    <script type="text/javascript">
        $(function() {
            $('#container').highcharts({
                chart: {
                    type: 'column',
                    margin: 75,
                    // options3d: {
                    //     enabled: true,
                    //     alpha: 10,
                    //     beta: 25,
                    //     depth: 70
                    // }
                },
                title: {
                    text: 'Valor Hardware/Software'
                },
                plotOptions: {
                    column: {
                        depth: 25
                    }
                },
                xAxis: {
                    categories: [
                        <?php
                            include_once 'conexion.php';
                            $sql = $conexion->prepare("SELECT * FROM informatica");
                            $sql->execute();
                            while ($fila = $sql->fetch(PDO::FETCH_ASSOC)) {
                                echo "'" . $fila['nombre'] . "',";
                            }
                        ?>
                    ]
                },
                yAxis: {
                    title: {
                        text: null
                    }
                },
                series: [{
                    data : [
                        <?php
                            include_once 'conexion.php';
                            $sql = $conexion->prepare("SELECT * FROM informatica");
                            $sql->execute();
                            while ($fila = $sql->fetch(PDO::FETCH_ASSOC)) {
                                echo $fila['valor unidad'] . ",";
                            }
                        ?>
                    ]
                }]
            });
        });
    </script>

</head>

<body>
    <header>
        <h1>Informe Grafico</h1>
        <a href="index.php">Volver</a>
    </header>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/highcharts-3d.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>

    <div id="container" style="height: 400px"></div>
    
</body>

</html>