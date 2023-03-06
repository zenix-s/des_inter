<?php

session_start();
if (isset($_SESSION['nombre'])) {
    header('Location: index.php');
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Iniciar sessión</title>
</head>

<body class="bg-primary pt-5">
    <center>
        <h2>INICIAR SESIÓN</h2>
        <div class="container mt-2 ">
            <div class="rows pt-5">
                <div class="col-md-4">


                    <form method="post" action="loginProceso.php">

                        <label>USUARIO</label>
                        <input type="text" name="txtUsuario" autocomplete="off" placeholder="" class="form-control">
                        <br>
                        <label>CONTRASEÑA</label>
                        <input type="password" name="txtPass" autocomplete="off" class="form-control">
                        <br>
                        <input type="submit" value="LOGUEARSE" class="btn btn-dark">

                    </form>


                </div>
            </div>
        </div>
    </center>

</body>

</html>