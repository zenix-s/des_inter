<?php
include_once "../includes/user_session.php";
$userSession = new UserSession();
if (!isset($_SESSION['user'])) {
    header('location: login.php');
}
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
    <link rel="stylesheet" href="../styles/pdf_style.css">
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
            <a href="ventasTable.php" data-select="0"><i class="bi bi-cash"></i> <span>Ventas</span></a>
            <a href="pdf.php" data-select="1"><i class="bi bi-file-pdf"></i><span>PDF</span></a>

        </div>
    </aside>
    <main>
        <h1>Reportes</h1>
        <section id="pdf_section_container">
            <a href="../pdf/libros_pdf.php" class="pdf">
                <span>Libros</span>
                <i class="bi bi-arrow-down"></i>
            </a>
            <a href="../pdf/ventas_pdf.php" class="pdf">
                <span>Ventas</span>
                <i class="bi bi-arrow-down"></i>
            </a>
        </section>
    </main>
    <script src="../js/dropdown_script.js"></script>
</body>

</html>