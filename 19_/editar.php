<?php

?>
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
                <form action="editar.php" method="post" class="formulario">
                    <h1>Formulario Registro</h1>
                    <div class="container-inputs">
                        <div class="container-in">
                            <input type="text" name="nombre" id="nombre" placeholder=" ">
                            <label for="nombre">Nombre</label>
                        </div>
                        <div class="container-in">
                            <input type="text" name="apellidos" id="apellidos" placeholder=" ">
                            <label for="apellidos">Apellidos</label>
                        </div>
                        <div class="container-in">
                            <input type="numeric" name="edad" id="edad" placeholder=" " min="0">
                            <label for="edad">Edad</label>
                        </div>
                        <div class="container-in">
                            <input type="text" name="ciudad" id="ciudad" placeholder=" ">
                            <label for="ciudad">Ciudad</label>
                        </div>
                        <div class="container-in">
                            <input type="text" name="profesion" id="profesion" placeholder=" ">
                            <label for="profesion">Profesion</label>
                        </div>
                    </div>
                    <div class="container-in">
                        <input type="submit" value="Enviar" name="enviar">
                    </div>
                </form>
            </div>
        </section>
    </main>
</body>
</html>