<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/login_style.css">
</head>

<body>
    <main>
        <h1>Proyecto DI</h1>
        <div class="form_container">
            <form action="loginproceso.php" method="POST" class="formulario" autocomplete="off">
                <h2>Iniciar Sesión</h2>
                <div class="container_inputs">
                    <div class="container_in">
                        <input type="text" name="usuario" id="usuario" placeholder=" " value="" autocomplete="off">
                        <label for="usuario">Usuario</label>
                    </div>
                    <div class="container_in">
                        <input type="password" name="pass" id="pass" placeholder=" " value="" autocomplete="off">
                        <label for="pass">Contraseña</label>
                    </div>
                    <div class="container_in">
                        <input type="submit" value="Iniciar Sesión" name="login">
                    </div>
                </div>
            </form>
        </div>
    </main>

</body>

</html>