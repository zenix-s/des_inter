<?php
include '../includes/user_session.php';
$userSession = new UserSession();
if (!isset($_SESSION['user'])) {
    header('location: login.php');
}
if (!isset($_GET['page'])) {
    header('location: booksTable.php?page=1');
} else {
    $page = $_GET['page'];
}
include_once "../includes/conexion.php";
$conexion = new Conexion();
$maxRows = $conexion->conectar()->prepare("SELECT COUNT(*) FROM libros");
$maxRows->execute();
$maxRows = $maxRows->fetch(PDO::FETCH_NUM);
$maxRows = $maxRows[0];
$limitInit = ($page - 1) * 10;
$consulta = $conexion->conectar()->prepare("SELECT * FROM libros LIMIT $limitInit,10");
$consulta->execute();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Archivo</title>
    <link rel="stylesheet" href="../styles/general_style.css">
    <link rel="stylesheet" href="../styles/books_table_style.css">
    <link rel="stylesheet" href="../styles/books_actions.css">
    <link rel="icon" href="../img/icon.svg">
    <link rel="stylesheet" href="../icons/bootstrap-icons.css">
</head>

<body>
    <header id="header">
        <div class="section_title_container">
            <h1>El archivo</h1>
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
                    <a href="../includes/logout.php"><i class="bi bi-box-arrow-left"></i>Cerrar sesión</a>
                </div>
                ';
            }
            ?>
            
        </div>
    </header>
    <aside>
        <div class="option_list_container">
            <a href="../index.php" data-select="0"><i class="bi bi-grid-1x2-fill"></i> <span>Dashboard</span></a>
            <a href="booksTable.php" data-select="1"><i class="bi bi-book"></i> <span>Libros</span></a>
        </div>
    </aside>
    <section class="form_new_book_container">
        <form action="../execution/addBook.php" method="POST">
            <button class="close_button" id="close_form">
                <i class="bi bi-x"></i>
            </button>
            <h1 style="grid-area: title;">Añadir Libro</h1>
            <div class="input_container" style="grid-area: isbn;">
                <input type="text" name="isbn" placeholder=" " id="isbn" required pattern="((?:[\dX]{13})|(?:[\d\-X]{17})|(?:[\dX]{10})|(?:[\d\-X]{13}))">
                <label for="isbn">ISBN*</label>
            </div>
            <div class="input_container" style="grid-area: autor;">

                <input type="text" name="autor" placeholder=" " id="autor">
                <label for="autor">Autor</label>
            </div>
            <div class="input_container" style="grid-area: titulo;">

                <input type="text" name="titulo" placeholder=" " id="titulo">
                <label for="titulo">Titulo*</label>
            </div>
            <div class="input_container" style="grid-area: editorial;">

                <input type="text" name="editorial" placeholder=" " id="editorial">
                <label for="editorial">Editorial</label>
            </div>
            <div class="input_container" style="grid-area: precio;">

                <input type="text" name="precio" placeholder=" " id="precio">
                <label for="precio">Precio Venta</label>
            </div>
            <div class="input_container" style="grid-area: submit;">
                <input type="submit" value="Enviar" name="addBook">
            </div>
        </form>
    </section>
    <main>
        <div class="form_actions_container" id="up_button_anchor">

            <button id="new_book">
                <i class="bi bi-plus"></i>
                <span>Añadir libro</span>
            </button>
            <div class="pages_container">
                <?php
                if ($page == 1 && $page == ceil($maxRows / 10)) {
                    echo "<a href='booksTable.php?page=" . ($page) . "'><i class='bi bi-chevron-left'></i></a>";
                    echo "<span>$page</span>";
                    echo "<a href='booksTable.php?page=" . ($page) . "'><i class='bi bi-chevron-right'></i></a>";
                } elseif ($page == 1) {
                    echo "<a href='booksTable.php?page=" . ($page) . "'><i class='bi bi-chevron-left'></i></a>";
                    echo "<span>$page</span>";
                    echo "<a href='booksTable.php?page=" . ($page + 1) . "'><i class='bi bi-chevron-right'></i></a>";
                } elseif ($page < ceil($maxRows / 10)) {
                    echo "<a href='booksTable.php?page=" . ($page - 1) . "'><i class='bi bi-chevron-left'></i></a>";
                    echo "<span>$page</span>";
                    echo "<a href='booksTable.php?page=" . ($page + 1) . "'><i class='bi bi-chevron-right'></i></a>";
                } else {
                    echo "<a href='booksTable.php?page=" . ($page - 1) . "'><i class='bi bi-chevron-left'></i></a>";
                    echo "<span>$page</span>";
                    echo "<a href='booksTable.php?page=" . ($page) . "'><i class='bi bi-chevron-right'></i></a>";
                }
                ?>
            </div>
            <div class="views_container">
                <a href="booksTable.php" class="active"><i class="bi bi-table"></i></a>
                <a href="booksCover.php"><i class="bi bi-journal-bookmark"></i></a>
            </div>
        </div>
        <section class="table_view_container" id="table_container">
            <table id="table">
                <thead>
                    <tr>
                        <th>ISBN</th>
                        <th>Titulo</th>
                        <th>Autor</th>
                        <th>Precio</th>
                        <!-- <th>Editorial</th> -->
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)) {
                        echo "<tr>";
                        echo "<td data-label='isbn'>" . $fila['isbn'] . "</td>";
                        echo "<td data-label='titulo'>" . $fila['titulo'] . "</td>";
                        echo "<td data-label='autor'>" . $fila['autor'] . "</td>";
                        echo "<td data-label='precio'>" . ($fila['precio'] / 100) . '€' . "</td>";
                        // echo "<td data-label='editorial'>" . $fila['editorial'] . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </section>
        <a href="#table" class="up_button"><i class="bi bi-arrow-up-circle-fill"></i></a>
    </main>
    <script>
        const newBookButton = document.getElementById("new_book");
        const formContainer = document.querySelector(".form_new_book_container");
        const closeButton = document.getElementById("close_form");

        newBookButton.addEventListener("click", () => {
            formContainer.classList.add("active");
        });

        closeButton.addEventListener("click", () => {
            formContainer.classList.remove("active");
        });
    </script>
    <script src="../js/dropdown_script.js"></script>
</body>

</html>