
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <section class="container">
            <div>
                <form action="loginproceso.php" method="POST" class="formulario" autocomplete="off">
                    <h1>Formulario Login</h1>
                    <div class="container-inputs">
                        <div class="container-in">
                            <input type="text" name="usuario" id="usuario" placeholder=" " value="">
                            <label for="usuario">Usuario</label>
                        </div>
                        <div class="container-in">
                            <input type="password" name="pass" id="pass" placeholder=" " value="">
                            <label for="pass">Contraseña</label>
                        </div>
                        <div class="container-in">
                            <input type="submit" value="Login" name="login">

                        </div>
                </form>
            </div>
        </section>
    </main>

</body>

</html>