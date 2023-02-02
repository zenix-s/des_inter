<?php
include_once 'check_session.php';
include_once 'includes/user.php';
include_once 'includes/user_session.php';

$userSession = new UserSession();
$user = new User();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Archivo</title>
    <link rel="stylesheet" href="styles/dashboard_style.css">
    <link rel="stylesheet" href="styles/general_style.css">
    <link rel="stylesheet" href="icons/bootstrap-icons.css">
    <link rel="icon" href="img/icon.svg">
</head>

<body>
    <header>
        <div class="section_title_container">
            <h1>El Archivo</h1>
        </div>
        <div class="form_actions_container" id="up_button_anchor">

        </div>
        <div class="user_container">
            <div class="user_name_container">
                <span>
                    <?php
                    if (isset($_SESSION['user'])) {
                        echo $userSession->getCurrentUser();
                    } else {
                        echo "<span onclick='window.location.href = \"views/login.php\";' style='cursor:pointer;'>Iniciar sesión</span>";
                    }
                    ?>
                </span>
            </div>
            <div class="user_img_container" onclick="
                window.location.href = 'includes/logout.php';
            ">
                <!-- <img src="img/user.svg" alt=""> -->
                <i class="bi bi-person"></i>
            </div>
        </div>
    </header>
    <aside>
        <div class="option_list_container">
            <a href="index.php" data-select="1"><i class="bi bi-grid-1x2-fill"></i> <span>Dashboard</span></a>
            <a href="views/tablas.php" data-select="0"><i class="bi bi-book"></i> <span>Libros</span></a>
            <a href="views/portadas.php" data-select="0"><i class="bi bi-journal-bookmark"></i><span>Portadas</span></a>
        </div>
    </aside>
    <main>

    </main>
</body>

</html>