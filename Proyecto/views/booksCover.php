<?php

include_once "../includes/user_session.php";
$userSession = new UserSession();
if (!isset($_SESSION['user'])) {
    header('location: login.php');
}

if (isset($_GET['search']) && $_GET['search'] != "") {
    $search = $_GET['search'];
}

if (!isset($_GET['page'])) {
    if (isset($search)) {
        header('location: booksCover.php?page=1&search=' . $search);
    } else {
        header('location: booksCover.php?page=1');
    }
} else {
    $page = $_GET['page'];
    if ($page <= 0) {
        if (isset($search)) {
            header('location: booksCover.php?page=1&search=' . $search);
        } else {
            header('location: booksCover.php?page=1');
        }
    }
}
include_once "../includes/conexion.php";
$conexion = new Conexion();
$limitInit = ($page - 1) * 9;
if (isset($search)) {
    $query = $conexion->conectar()->prepare("SELECT * FROM libros where portada != '' and (isbn like '%$search%' or titulo like '%$search%' or autor like '%$search%' or editorial like '%$search%') LIMIT $limitInit,9");
    $maxRows = $conexion->conectar()->prepare("SELECT COUNT(*) FROM libros where portada != '' and (isbn like '%$search%' or titulo like '%$search%' or autor like '%$search%' or editorial like '%$search%')");
    $maxRows->execute();
    $maxRows = $maxRows->fetch(PDO::FETCH_NUM);
    $maxRows = $maxRows[0];
    $query->execute();
} else {
    $maxRows = $conexion->conectar()->prepare("SELECT COUNT(*) FROM libros where portada != ''");
    $maxRows->execute();
    $maxRows = $maxRows->fetch(PDO::FETCH_NUM);
    $maxRows = $maxRows[0];
    $query = $conexion->conectar()->prepare("SELECT * FROM libros where portada != '' LIMIT $limitInit,9");
    $query->execute();
}


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
    <link rel="stylesheet" href="../styles/form_new_book.css">
</head>

<body>
    <header id="header">
        <div class="section_title_container">
            <h1>el archivo</h1>
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
            <a href="vendedores.php" data-select="0"><i class="bi bi-person"></i> <span>Vendedores</span></a>
            <a href="ventasTable.php" data-select="0"><i class="bi bi-cash"></i> <span>Ventas</span></a>
            <a href="pdf.php" data-select="0"><i class="bi bi-file-pdf"></i><span>PDF</span></a>


        </div>
    </aside>
    <section class="form_new_book_container <?php
                                            if (isset($_GET['isbn'])) {
                                                echo "active";
                                            }
                                            ?>">
        <form action="../execution/addBook.php" method="post" enctype="multipart/form-data">
            <a class="close_button" id="close_form" href="booksCover.php?page=<?php echo $page ?>">
                <i class="bi bi-x"></i>
            </a>
            <h1 id="header_new_book"><?php
                                        if (isset($_GET['isbn'])) {
                                            echo "Modificar libro";
                                        } else {
                                            echo "Añadir Libro";
                                        }
                                        ?></h1>
            <div class="cover_book_input">
                <img src="<?php
                            if (isset($_GET['isbn']) && $cover != "") {
                                echo "../img/portadas/$cover";
                            } else {
                                echo "../img/book_placeholder.jpg";
                            }
                            ?>" alt="book_placeholder" id="bookCoverImg">
                <input type="file" name="img_cover" id="bookCoverInput" accept="image/png, image/jpeg" style="display: none;">
            </div>
            <div class="input_container" id="isbn_container">
                <input type="text" name="isbn" placeholder=" " id="isbn" required pattern="((?:[\dX]{13})|(?:[\d\-X]{17})|(?:[\dX]{10})|(?:[\d\-X]{13}))" value="<?php
                                                                                                                                                                    if (isset($_GET['isbn'])) {
                                                                                                                                                                        echo $isbn;
                                                                                                                                                                    }
                                                                                                                                                                    ?>">
                <label for="isbn">ISBN*</label>
            </div>
            <div class="input_container" id="autor_container">

                <input type="text" name="autor" placeholder=" " id="autor" value="<?php
                                                                                    if (isset($_GET['isbn'])) {
                                                                                        echo $autor;
                                                                                    }
                                                                                    ?>">
                <label for="autor">Autor</label>
            </div>
            <div class="input_container" id="titulo_container">

                <input type="text" name="titulo" placeholder=" " id="titulo" value="<?php
                                                                                    if (isset($_GET['isbn'])) {
                                                                                        echo $titulo;
                                                                                    }
                                                                                    ?>">
                <label for="titulo">Titulo*</label>
            </div>
            <div class="input_container" id="editorial_container">

                <input type="text" name="editorial" placeholder=" " id="editorial" value="<?php
                                                                                            if (isset($_GET['isbn'])) {
                                                                                                echo $editorial;
                                                                                            }
                                                                                            ?>">
                <label for="editorial">Editorial</label>
            </div>
            <div class="input_container" id="precio_container">

                <input type="text" name="precio" placeholder=" " id="precio" value="<?php
                                                                                    if (isset($_GET['isbn'])) {
                                                                                        echo $precio;
                                                                                    }
                                                                                    ?>">
                <label for="precio">Precio Venta</label>
            </div>
            <div class="input_container" id="submit_container">
                <input type="submit" value="<?php
                                            if (isset($_GET['isbn'])) {
                                                echo "Modificar";
                                            } else {
                                                echo "Añadir";
                                            }
                                            ?>" name="<?php
                                                        if (isset($_GET['isbn'])) {
                                                            echo "updateBook";
                                                        } else {
                                                            echo "addBook";
                                                        }
                                                        ?>" id="submit_new_book">
            </div>
        </form>
    </section>
    <main>
        <div class="form_actions_container" id="up_button_anchor">
            <div class="searchBook">
                <form action="booksCover.php" method="get">
                    <input type="text" name="search" placeholder="Buscar" id="searchBook">
                    <button type="submit" id="searchBookButton"><i class="bi bi-search"></i></button>
                </form>
            </div>
            <div class="newBook">
                <button id="new_book">
                    <i class="bi bi-plus"></i>
                    <span>Añadir libro</span>
                </button>
            </div>
            <div class="pages_container">
                <?php
                if ($page == 1 && $page == ceil($maxRows / 9)) {
                    echo "<a href='booksCover.php?page=" . ($page) . "'><i class='bi bi-chevron-left'></i></a>";
                    echo "<span>$page</span>";
                    echo "<a href='booksCover.php?page=" . ($page) . "'><i class='bi bi-chevron-right'></i></a>";
                } elseif ($page == 1) {
                    echo "<a href='booksCover.php?page=" . ($page) . "'><i class='bi bi-chevron-left'></i></a>";
                    echo "<span>$page</span>";
                    echo "<a href='booksCover.php?page=" . ($page + 1) . "'><i class='bi bi-chevron-right'></i></a>";
                } elseif ($page < ceil($maxRows / 9)) {
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
                <a href="booksTable.php"><i class="bi bi-table"></i></a>
                <a href="booksCover.php" class="active"><i class="bi bi-journal-bookmark"></i></a>
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
    <script>
        const newBookButton = document.getElementById("new_book");
        const formContainer = document.querySelector(".form_new_book_container");
        const closeButton = document.getElementById("close_form");

        newBookButton.addEventListener("click", () => {
            formContainer.classList.add("active");
        });
    </script>
    <script src="../js/dropdown_script.js"></script>
    <script src="../js/newBook.js"></script>
    <script src="../js/modifyBook.js"></script>
</body>

</html>