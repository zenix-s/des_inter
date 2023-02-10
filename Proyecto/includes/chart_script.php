<?php
include_once 'conexion.php';
$conexion = new Conexion();
echo "
<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js'></script>
    <script type='text/javascript'>
        $(function() {
            $('#container').highcharts({
                chart: {
                    type: 'pie',
                    backgroundColor: '#535f71',
                    style: {
                        color: '#fff',
                        fontSize: '1em',
                        textTransform: 'uppercase',
                        textShadow: 'none'
                    }
                },
                title: {
                    text: 'Número de ventas por vendedor',
                    style: {
                        color: '#fff',
                        fontSize: '2em',
                        textTransform: 'uppercase'
                    }
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
                    data: [";
                        $sql = $conexion->conectar()->prepare("SELECT count(*) as 'venta_total', id_vendedor FROM ventas group by id_vendedor");
                        $sql->execute();
                        while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
                            $nombreVendedor = $conexion->conectar()->prepare("SELECT nombre FROM vendedores WHERE id_vendedor = ?");
                            $nombreVendedor->execute(array($row['id_vendedor']));
                            $nombreVendedor = $nombreVendedor->fetch(PDO::FETCH_ASSOC);
                            $nombreVendedor = $nombreVendedor['nombre'];                            
                            echo "['" . $nombreVendedor . "', " . $row['venta_total'] . "],";
                        }
                        echo "
                    ]
                }]
            });
        });
    </script>
    </script>
    ";
?>