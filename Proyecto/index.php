<?php
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto DI</title>
    <link rel="stylesheet" href="styles/dashboard_style.css">
    <link rel="stylesheet" href="styles/general_style.css">
    <link rel="stylesheet" href="icons/bootstrap-icons.css">
    <link rel="icon" href="img/icon.svg">
</head>

<body>
    <header>
        <div class="section_title_container">
            <h1>Dashboard</h1>
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
            <a href="index.php"><i class="bi bi-grid-1x2-fill"></i> <span>Dashboard</span></a>
            <a href="views/tablas.php"><i class="bi bi-book"></i> <span>Libros</span></a>
            <a href="views/formulario.php"><i class="bi bi-plus-circle"></i><span>Añadir</span></a>
            <a href="#"><i class="bi bi-pen"></i><span>Modificar</span></a>
            <a href="#"><i class="bi bi-trash"></i><span>Eliminar</span></a>
        </div>
    </aside>
    <main>

    </main>
</body>

</html>