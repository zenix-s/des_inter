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
    <link rel="stylesheet" href="../styles/portadas_style.css">
    <link rel="stylesheet" href="../icons/bootstrap-icons.css">
</head>

<body>
    <header id="header">
        <div class="section_title_container">
            <h1>el archivo</h1>
        </div>
        <div class="form_actions_container" id="up_button_anchor">

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
            <a href="tablas.php" data-select="0"><i class="bi bi-book"></i> <span>Libros</span></a>
            <a href="portadas.php" data-select="1"><i class="bi bi-journal-bookmark"></i><span>Portadas</span></a>
        </div>
    </aside>
    <main>
        <?php
            include_once "../includes/conexion.php";
            $conexion = new Conexion();
            $query = $conexion->conectar()->query("SELECT * FROM libros where portada != '' LIMIT 3,3");
            $portadas = $query->fetchAll(PDO::FETCH_ASSOC);
            foreach($portadas as $portada){
                echo "<div class='portada_container'>";
                    echo "<img src='../img/portadas/".$portada['portada']. "' alt=''>";
                    echo "<div class='portada_info_container'>";
                        echo "<span>".$portada['titulo']."</span>";
                        echo "<span>".$portada['autor']."</span>";
                    echo "</div>";
                echo "</div>";
            }
        ?>
    </main>
</body>

</html>