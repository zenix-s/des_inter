<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto DI</title>
    <link rel="icon" href="../img/icon.svg">
    <link rel="stylesheet" href="../styles/general_style.css">
    <link rel="stylesheet" href="../styles/form_style.css">
    <link rel="stylesheet" href="../icons/bootstrap-icons.css">
</head>

<body>
    <header id="header">
        <div class="section_title_container">
            <h1>Añadir Libros</h1>
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
    <main>
        <section class="form_container">
            <form action="">
                <div class="input_container">
                    <label for="isbn">ISBN</label>
                    <input type="text" name="isbn">
                </div>
                <div class="input_container">
                    <label for="autor">Autor</label>
                    <input type="text" name="autor">
                </div>
                <div class="input_container">
                    <label for="titulo">Titulo</label>
                    <input type="text" name="titulo">
                </div>
                <div class="input_container">
                    <label for="editorial">Editorial</label>
                    <input type="text" name="editorial">
                </div>
                <div class="input_container">
                    <label for="fecha">Fecha de publicación</label>
                    <input type="date" name="fecha">
                </div>
                <div class="input_container">
                    <input type="submit" value="Enviar">
                </div>
            </form>
        </section>
    </main>
</body>

</html>