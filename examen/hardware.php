<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product App</title>
    <!-- Bootswatch Theme -->
    <link rel="stylesheet" href="https://bootswatch.com/4/litera/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="App.css">
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">Inventario Hardware</a>
    </nav>


    <div class="container">
        <!-- APPLICATION -->
        <div id="App" class="row pt-5">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h6>Añadir nuevos Hardware</h6>
                    </div>
                    <form name="hardware" action="" method="post">
                        <div class="form-group">
                            <input type="text" name="nombre" placeholder="Nombre del Hardware" required class="form-control">
                        </div>
						<div class="form-group">
                            <input type="text" name="marca" placeholder="Marca" required class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="number" name="cantidad" placeholder="Cantidad de producto" required class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="number" name="Departamento" placeholder="Departamento" required class="form-control">
                        </div>
						 <div class="form-group">
                            <input type="submit" value="Guardar" name="enviar" class="btn btn-primary btn-block">
                        </div>
                       
                    </form>
                </div>
            </div>

            
        </div>
    </div>

    <script src="App1.js"></script>
</body>

</html>