<?php

include_once "../includes/user_session.php";
$userSession = new UserSession();
if (!isset($_SESSION['user'])) {
    header('location: login.php');
}
if (!isset($_GET['page'])) {
    header('location: booksCover.php?page=1');
} else {
    $page = $_GET['page'];
}
include_once "../includes/conexion.php";
$conexion = new Conexion();
$maxRows = $conexion->conectar()->prepare("SELECT COUNT(*) FROM libros where portada != ''");
$maxRows->execute();
$maxRows = $maxRows->fetch(PDO::FETCH_NUM);
$maxRows = $maxRows[0];
$limitInit = ($page - 1) * 9;
$query = $conexion->conectar()->prepare("SELECT * FROM libros where portada != '' LIMIT $limitInit,9");
$query->execute();

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Archivo</title>
    <link rel="icon" href="../img/icon.svg">
    <link rel="stylesheet" href="../styles/general_style.css">
    <link rel="stylesheet" href="../styles/books_cover_style.css">
    <link rel="stylesheet" href="../icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../styles/books_actions.css">
</head>

<body>
    <header id="header">
        <div class="section_title_container">
            <h1>el archivo</h1>
        </div>

        <div class="user_container">
            <div class="user_name_container">
                <span>
                    <?php
                    echo $userSession->getCurrentUser();
                    ?>
                </span>
            </div>
            <div class="user_img_container" onclick="
                window.location.href = '../includes/logout.php';
            ">
                <!-- <img src="img/user.svg" alt=""> -->
                <i class="bi bi-person"></i>
            </div>
        </div>
    </header>
    <aside>
        <div class="option_list_container">
            <a href="../index.php" data-select="0"><i class="bi bi-grid-1x2-fill"></i> <span>Dashboard</span></a>
            <a href="booksTable.php" data-select="1"><i class="bi bi-book"></i> <span>Libros</span></a>
        </div>
    </aside>
    <main>
        <div class="form_actions_container" id="up_button_anchor">

            <button id="new_book">
                <i class="bi bi-plus"></i>
                <span>Añadir libro</span>
            </button>
            <div class="pages_container">
                <?php
                if ($page == 1 && $page == ceil($maxRows / 10)) {
                    echo "<a href='booksCover.php?page=" . ($page) . "'><i class='bi bi-chevron-left'></i></a>";
                    echo "<span>$page</span>";
                    echo "<a href='booksCover.php?page=" . ($page) . "'><i class='bi bi-chevron-right'></i></a>";
                } elseif ($page == 1) {
                    echo "<a href='booksCover.php?page=" . ($page) . "'><i class='bi bi-chevron-left'></i></a>";
                    echo "<span>$page</span>";
                    echo "<a href='booksCover.php?page=" . ($page + 1) . "'><i class='bi bi-chevron-right'></i></a>";
                } elseif ($page < ceil($maxRows / 10)) {
                    echo "<a href='booksCover.php?page=" . ($page - 1) . "'><i class='bi bi-chevron-left'></i></a>";
                    echo "<span>$page</span>";
                    echo "<a href='booksCover.php?page=" . ($page + 1) . "'><i class='bi bi-chevron-right'></i></a>";
                } else {
                    echo "<a href='booksCover.php?page=" . ($page - 1) . "'><i class='bi bi-chevron-left'></i></a>";
                    echo "<span>$page</span>";
                    echo "<a href='booksCover.php?page=" . ($page) . "'><i class='bi bi-chevron-right'></i></a>";
                }
                ?>
            </div>
            <div class="views_container">
                <a href="booksTable.php" class="active"><i class="bi bi-table"></i></a>
                <a href="booksCover.php"><i class="bi bi-journal-bookmark"></i></a>
            </div>
        </div>
        <div class="books_cover_container">
            <?php
            $portadas = $query->fetchAll(PDO::FETCH_ASSOC);
            foreach ($portadas as $portada) {
                echo "<div class='portada_container'>";
                echo "<div class='portada_img_container'>";
                echo "<img src='../img/portadas/" . $portada['portada'] . "' alt=''>";
                echo "</div>";
                echo "<div class='portada_info_container'>";
                echo "<span>" . $portada['titulo'] . "</span>";
                echo "<span>" . $portada['autor'] . "</span>";
                echo "</div>";
                echo "</div>";
            }
            ?>
        </div>
    </main>
</body>

</html>