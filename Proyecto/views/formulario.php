<?php

include_once "../includes/user_session.php";
$userSession = new UserSession();
if(!isset($_SESSION['user'])){
    header('location: login.php');
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
                <p>
                    <?php
                        echo $userSession->getCurrentUser();
                    ?>
                </p>
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
            <a href="tablas.php" data-select="0"><i class="bi bi-book"></i> <span>Libros</span></a>
            <a href="formulario.php" data-select="1"><i class="bi bi-plus-circle"></i><span>Añadir</span></a>
            <a href="#"><i class="bi bi-pen" data-select="0"></i><span>Modificar</span></a>
            <a href="#"><i class="bi bi-trash" data-select="0"></i><span>Eliminar</span></a>
        </div>
    </aside>
    <main>
        <section class="form_container">
            <form action="">
                
            </form>
        </section>
    </main>
</body>

</html>