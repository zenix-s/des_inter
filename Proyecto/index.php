<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto DI</title>
    <link rel="stylesheet" href="styles/dashboard_style.css">
    <link rel="stylesheet" href="styles/general_style.css">
    <link rel="icon" href="img/icon.svg">
</head>
<body>
    <header>
        <div class="icon_container">
            <a href="index.php"><img src="img/icon.svg" alt=""></a>
        </div>
    </header>
    <main>
        <section id="dashboard_container">
            <div class="dashboard_item_container" onclick="window.location.href = 'views/tablas.php';">
                <h2>Tablas</h2>
            </div>
            <div class="dashboard_item_container">
                <h2>Modificar</h2>
            </div>
            <div class="dashboard_item_container">
                <h2>Eliminar</h2>
            </div>
            <div class="dashboard_item_container" onclick="window.location.href = 'views/formulario.php';">
                <h2>Añadir</h2>
            </div>
        </section>
    </main>
    <footer>

    </footer>
</body>
</html>