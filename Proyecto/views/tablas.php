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
        <div class="section_title_container">
            <h1>Libros</h1>
        </div>
        <div class="user_container">
            <div class="user_name_container">
                <p>Usuario</p>
            </div>
            <div class="user_img_container">
                <!-- <img src="img/user.svg" alt=""> -->
                <i class="bi bi-person"></i>
            </div>
        </div>
    </header>
    <aside>
        <div class="option_list_container">
            <a href="../index.php"><i class="bi bi-grid-1x2-fill"></i> <span>Dashboard</span></a>
            <a href="tablas.php"><i class="bi bi-table"></i> <span>Tabla</span></a>
            <a href="formulario.php"><i class="bi bi-plus-circle"></i><span>Añadir</span></a>
            <a href="#"><i class="bi bi-pen"></i><span>Modificar</span></a>
            <a href="#"><i class="bi bi-trash"></i><span>Eliminar</span></a>
        </div>
    </aside>
    <section class="form_new_book_container">
        <form action="">
            <button class="close_button" id="close_form">
                <i class="bi bi-x"></i>
            </button>
            <h1>Añadir Libro</h1>
            <div class="input_container">

                <input type="text" name="isbn" placeholder=" ">
                <label for="isbn">ISBN</label>
            </div>
            <div class="input_container">

                <input type="text" name="autor" placeholder=" " >
                <label for="autor">Autor</label>
            </div>
            <div class="input_container">

                <input type="text" name="titulo" placeholder=" ">
                <label for="titulo">Titulo</label>
            </div>
            <div class="input_container">

                <input type="text" name="editorial" placeholder=" ">
                <label for="editorial">Editorial</label>
            </div>
            <div class="input_container">

                <input type="date" name="fecha" placeholder=" ">
                <label for="fecha">Fecha de publicación</label>
            </div>
            <div class="input_container">
                <input type="submit" value="Enviar">
            </div>
        </form>
    </section>
    <main>
        <section class="form_actions_container" id="up_button_anchor">
            <button id="new_book">
                <i class="bi bi-plus"></i>
                <span>Añadir libro</span>
            </button>
        </section>
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
                    while ($reg = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
                        echo "<tr>";
                        echo "<td data-label='ISBN'>" . $reg['isbn'] . "</td>";
                        echo "<td data-label='Autor'>" . $reg['autor'] . "</td>";
                        echo "<td data-label='Titulo'>" . $reg['titulo'] . "</td>";
                        echo "<td data-label='EDITORIAL'>" . $reg['editorial'] . "</td>";
                        echo "<td data-label='FECHA'>" . $reg['fecha'] . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </section>
        <a href="#up_button_anchor" class="up_button"><i class="bi bi-arrow-up-circle-fill"></i></a>
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
</body>

</html>