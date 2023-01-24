<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto DI</title>
    <link rel="icon" href="../img/icon.svg">
    <link rel="stylesheet" href="../styles/general_style.css">
</head>

<body>
    <header>
        <div class="icon_container">
            <a href="../index.php"><img src="../img/icon.svg" alt=""></a>
        </div>
    </header>
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