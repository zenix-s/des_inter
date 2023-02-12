<?php
include_once "../includes/user_session.php";
$userSession = new UserSession();
if (!isset($_SESSION['user'])) {
    header('location: login.php');
}

include_once "../includes/conexion.php";
$conexion = new Conexion();

if(isset($_GET['id_venta'])){
    include_once "../includes/Ventas.php";
    $venta = new Ventas();
    $venta = $venta->getVentaId($_GET['id_venta']);
    $id_venta = $venta['id_venta'];
    $isbn = $venta['isbn'];
    $id_vendedor = $venta['id_vendedor'];
}

$sql = $conexion->conectar()->prepare("SELECT * FROM ventas");
$sql->execute();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/general_style.css">
    <link rel="stylesheet" href="../icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../styles/ventas_style.css">
</head>

<body>
    <header>
        <div class="section_title_container">
            <h1>El Archivo</h1>
        </div>
        <div class="user_container">
            <div class="user_name_container" id="dropdown_button">
                <?php
                if (isset($_SESSION['user'])) {
                    echo "<span>" . $userSession->getCurrentUser() . "<i class='bi bi-chevron-down'></i></span>";
                } else {
                    echo "<span onclick='window.location.href = \"views/login.php\";' style='cursor:pointer;'>Iniciar sesión <i class='bi bi-box-arrow-in-right'></i></span>";
                }
                ?>
            </div>
            <?php
            if (isset($_SESSION['user'])) {
                echo '
                <div class="dropdown_menu" id="dropdown_menu">
                    <a href="#"><i class="bi bi-person-fill"></i> Perfil</a>
                    <a href="#"><i class="bi bi-palette"></i>Themes</a>
                    <a href="includes/logout.php"><i class="bi bi-box-arrow-left"></i>Cerrar sesión</a>
                </div>
                ';
            }
            ?>

        </div>
    </header>
    <aside>
        <div class="option_list_container">
            <a href="../index.php" data-select="0"><i class="bi bi-grid-1x2-fill"></i> <span>Dashboard</span></a>
            <a href="booksTable.php" data-select="0"><i class="bi bi-book"></i> <span>Libros</span></a>
            <a href="vendedores.php" data-select="0"><i class="bi bi-person"></i> <span>Vendedores</span></a>
            <a href="ventasTable.php" data-select="1"><i class="bi bi-cash"></i> <span>Ventas</span></a>
            <a href="pdf.php" data-select="0"><i class="bi bi-file-pdf"></i><span>PDF</span></a>

        </div>
    </aside>
    <section class="form_container <?php
                                            if (isset($_GET['id_venta'])) {
                                                echo "active";
                                            }
                                            ?>">
        <form action="../execution/actionVentas.php" method="post" enctype="multipart/form-data">
            <a class="close_button" id="close_form" href="ventasTable.php">
                <i class="bi bi-x"></i>
            </a>
            <h1><?php
                                        if (isset($_GET['id_venta'])) {
                                            echo "Modificar Venta";
                                        } else {
                                            echo "Añadir Venta";
                                        }
                                        ?></h1>
            <input type="hidden" name="id_venta" value="<?php
                                                        if (isset($_GET['id_venta'])) {
                                                            echo $id_venta;
                                                        }
                                                        ?>">
            <div class="input_container">
                <select name="isbn" id="isbn" required>

                    <?php
                    $comboIsbn = $conexion->conectar()->prepare("SELECT * FROM libros");
                    $comboIsbn->execute();
                    $libros = $comboIsbn->fetchAll(PDO::FETCH_ASSOC);
                    echo "<option value=''></option>";
                    foreach ($libros as $libro) {
                        
                        if (isset($_GET['id_venta'])) {
                            if ($libro['isbn'] == $isbn) {
                                echo "<option value='" . $libro['isbn'] . "' selected>" . $libro['titulo'] . "</option>";
                            } else {
                                echo "<option value='" . $libro['isbn'] . "'>" . $libro['titulo'] . "</option>";
                            }
                        } else {
                            echo "<option value='" . $libro['isbn'] . "'>" . $libro['titulo'] . "</option>";
                        }
                    }
                    ?>
                </select>
                <label for="isbn">ISBN*</label>
            </div>
            <div class="input_container">
                <select name="id_vendedor" id="id_vendedor" required>
                    <?php
                    $comboVendedor = $conexion->conectar()->prepare("SELECT * FROM vendedores");
                    $comboVendedor->execute();
                    $vendedores = $comboVendedor->fetchAll(PDO::FETCH_ASSOC);
                    echo "<option value=''></option>";
                    foreach ($vendedores as $vendedor) {
                        if (isset($_GET['id_venta'])) {
                            if ($vendedor['id_vendedor'] == $id_vendedor) {
                                echo "<option value='" . $vendedor['id_vendedor'] . "' selected>" . $vendedor['nombre'] . "</option>";
                            } else {
                                echo "<option value='" . $vendedor['id_vendedor'] . "'>" . $vendedor['nombre'] . "</option>";
                            }
                        } else {
                            echo "<option value='" . $vendedor['id_vendedor'] . "'>" . $vendedor['nombre'] . "</option>";
                        }
                    }
                    ?>
                </select>
                <label for="id_vendedor">Vendedor*</label>
            </div>
            <div class="input_container" id="submit_container">
                <input type="submit" value="<?php
                                            if (isset($_GET['id_venta'])) {
                                                echo "Modificar";
                                            } else {
                                                echo "Añadir";
                                            }
                                            ?>" name="<?php
                                                        if (isset($_GET['id_venta'])) {
                                                            echo "updateVenta";
                                                        } else {
                                                            echo "addVenta";
                                                        }
                                                        ?>" id="submit_new_venta">
            </div>
        </form>
    </section>
    <main>
        <div class="actions_container">
            <div class="searchVenta">
                <input type="text" name="search" placeholder="Buscar Id Vendedor" id="searchVenta">
            </div>
            <div class="newVenta">
                <button id="new_venta">
                    <i class="bi bi-plus"></i>
                    <span>Añadir Venta</span>
                </button>
            </div>
        </div>
        <section class="table_container" id="table_container">
            <table id="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>ISBN</th>
                        <th>ID Vendedor</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($fila = $sql->fetch(PDO::FETCH_ASSOC)) {
                        echo "<tr>";
                        echo "<td data-label='Id Venta'>" . $fila['id_venta'] . "</td>";
                        echo "<td data-label='ISBN'>" . $fila['isbn'] . "</td>";
                        echo "<td data-label='Id Vendedor'>" . $fila['id_vendedor'] . "</td>";
                        echo "<td data-label='Acciones'><a href='ventasTable.php?id_venta=" . $fila['id_venta'] . "'><i class='bi bi-pencil-square'></i></a> <a href='../execution/deleteVentas.php?id_venta=" . $fila['id_venta'] . "'><i class='bi bi-trash'></i></a></td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </section>
        <a href="#table" class="up_button"><i class="bi bi-arrow-up-circle-fill"></i></a>
    </main>
    <script src="../js/dropdown_script.js"></script>
    <script src="../js/ventas_script.js"></script>
</body>

</html>