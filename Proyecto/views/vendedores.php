<?php
include_once "../includes/user_session.php";
$userSession = new UserSession();
if (!isset($_SESSION['user'])) {
    header('location: login.php');
}

include_once "../includes/conexion.php";
$conexion = new Conexion();

if(isset($_GET['id'])){
    include_once "../includes/Vendedores.php";
    $vendedores = new Vendedores();
    $vendedor = $vendedores->getVendedorId($_GET['id']);
    $dni = $vendedor['dni'];
    $nombre = $vendedor['nombre'];
    $id = $_GET['id'];
    echo "hola";
}

$sql = $conexion->conectar()->prepare("SELECT * FROM vendedores");
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
    <link rel="stylesheet" href="../styles/vendedores_style.css">
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
            <a href="vendedores.php" data-select="1"><i class="bi bi-person"></i> <span>Vendedores</span></a>
            <a href="ventasTable.php" data-select="0"><i class="bi bi-cash"></i> <span>Ventas</span></a>
            <a href="pdf.php" data-select="0"><i class="bi bi-file-pdf"></i><span>PDF</span></a>


        </div>
    </aside>
    <section class="form_container <?php
                                            if (isset($_GET['id'])) {
                                                echo "active";
                                            }
                                            ?>">
        <form action="../execution/actionVendedores.php" method="post" enctype="multipart/form-data">
            <a class="close_button" id="close_form" href="vendedores.php">
                <i class="bi bi-x"></i>
            </a>
            <h1 id="header_new_Vendedor"><?php
                                        if (isset($_GET['id'])) {
                                            echo "Modificar Vendedor";
                                        } else {
                                            echo "Añadir Vendedor";
                                        }
                                        ?></h1>
            <input type="hidden" name="old_dni" value="<?php
                                                        if (isset($_GET['id'])) {
                                                            echo $dni;
                                                        }
                                                        ?>">
            <div class="input_container" id="nombre_container">

                <input type="text" name="nombre" placeholder=" " id="nombre" value="<?php
                                                                                    if (isset($_GET['id'])) {
                                                                                        echo $nombre;
                                                                                    }
                                                                                    ?>" required pattern="[A-ZÀ-ÿa-z0-9 ]{3,25}">
                <label for="nombre">Nombre*</label>
            </div>
            <div class="input_container" id="dni_container">

                <input type="text" name="dni" placeholder=" " id="dni" value="<?php
                                                                                    if (isset($_GET['id'])) {
                                                                                        echo $dni;
                                                                                    }
                                                                                    ?>" required pattern="(([x-z]|[X-Z]{1})([-]?)(\d{7})([-]?)([a-z]|[A-Z]{1}))|((\d{8})([-]?)([a-z]|[A-Z]{1}))">
                <label for="dni">DNI*</label>
            </div>
            <div class="input_container" id="submit_container">
                <input type="submit" value="<?php
                                            if (isset($_GET['id'])) {
                                                echo "Modificar";
                                            } else {
                                                echo "Añadir";
                                            }
                                            ?>" name="<?php
                                                        if (isset($_GET['id'])) {
                                                            echo "updateVendedor";
                                                        } else {
                                                            echo "addVendedor";
                                                        }
                                                        ?>" id="submit_new_Vendedor">
            </div>
        </form>
    </section>
    <main>
        <div class="actions_container">
            <div class="searchVendedor">
                <input type="text" name="search" placeholder="Buscar Nombre" id="searchVendedor">
            </div>
            <div class="newVendedor">
                <button id="new_vendedor">
                    <i class="bi bi-plus"></i>
                    <span>Añadir Vendedor</span>
                </button>
            </div>
        </div>
        <section class="table_container" id="table_container">
            <table id="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>DNI</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($fila = $sql->fetch(PDO::FETCH_ASSOC)) {
                        echo "<tr>";
                        echo "<td data-label='Id Vendedor'>" . $fila['id_vendedor'] . "</td>";
                        echo "<td data-label='Nombre'>" . $fila['nombre'] . "</td>";
                        echo "<td data-label='DNI'>" . $fila['dni'] . "</td>";
                        echo "<td data-label='Acciones'><a href='vendedores.php?id=" . $fila['id_vendedor'] . "'><i class='bi bi-pencil-square'></i></a> <a href='../execution/deleteVendedor.php?dni=" . $fila['dni'] . "'><i class='bi bi-trash'></i></a></td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </section>
        <a href="#table" class="up_button"><i class="bi bi-arrow-up-circle-fill"></i></a>
    </main>
    <script src="../js/dropdown_script.js"></script>
    <script src="../js/vendedores_script.js"></script>
</body>

</html>