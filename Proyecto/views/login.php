<?php
include '../check_session.php';
include '../includes/user.php';
include '../includes/user_session.php';

$userSession = new UserSession();

if (isset($_SESSION['user'])) {
    header('Location: ../index.php');
}


if (isset($_POST['login'])) {
    try{
        check_session('../index.php', $_POST['username'], $_POST['pass']);
    }catch(Exception $e){
        echo "Algo salió mal";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Archivo</title>
    <link rel="stylesheet" href="../styles/login_style.css">
    <link rel="stylesheet" href="../icons/bootstrap-icons.css">
</head>

<body>
    <main>
        <div class="form_container">
            <h1>EL ARCHIVO</h1>
            <form action="" method="POST" class="formulario" autocomplete="off">
                <h2>Iniciar Sesión</h2>
                <div class="container_inputs">
                    <div class="container_in">
                        <input type="text" name="username" id="username" placeholder=" " autocomplete="off" required pattern="^[A-ZÀ-ÿa-z0-9_-]{3,25}$">
                        <label for="username"><i class="bi bi-person-fill"></i>Usuario</label>
                    </div>
                    <div class="container_in">
                        <input type="password" name="pass" id="pass" placeholder=" " value="" autocomplete="off" required pattern="(?=(.*[0-9]))((?=.*[A-Za-z0-9])(?=.*[A-Z])(?=.*[a-z]))^.{5,25}$">
                        <label for="pass"><i class="bi bi-shield-lock"></i>Contraseña</label>
                    </div>
                    <div class="container_in">
                        <input type="submit" value="Iniciar Sesión" name="login">
                    </div>
                </div>
                <a href="register.php">Registrar una nueva cuenta</a>
            </form>
        </div>
    </main>
    <script src="../js/login_validation.js"></script>
</body>

</html>