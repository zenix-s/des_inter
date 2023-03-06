<?php
if(!isset($_GET['id'])){
    header('Location: index.php');
}
$codigo = $_GET['id'];
include 'conexion.php';
$query = $bd->prepare("SELECT * FROM evaluaciones WHERE id_alumno = ?");
$query->execute([$codigo]);
$alumno = $query->fetch(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        main {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f2f2f2;
        }
        .container{
            width: 100%;
            max-width: 500px;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .formulario{
            width: 100%;
        }
        .formulario h1{
            text-align: center;
            margin-bottom: 20px;
        }
        .container-in{
            display: flex;
            flex-direction: column-reverse;
            margin-bottom: 20px;
        }
        .container-in input{
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
        }
        .container-in input:focus{
            border: 1px solid #000;
        }
        .container-in label{
            margin-bottom: 5px;
        }
        .container-in input[type="submit"]{
            background: rgb(0, 0, 0);
            color: rgb(255, 255, 255);
            border: none;
            cursor: pointer;
            font-size: 16px;
        }
        #volver_button{
            position: absolute;
            top: 20px;
            left: 20px;
            display: block;
            width: 100px;
            padding: 10px;
            background: rgb(100, 100, 100);
            color: #fff;
            text-decoration: none;
            text-align: center;
            border-radius: 5px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <main>
        <a href="index.php" id="volver_button">Volver</a>
        <section class="container">
            <div>
                <form action="editar-proceso.php" method="POST" class="formulario">
                    <h1>Formulario Registro</h1>
                    <div class="container-inputs">
                        <div class="container-in">
                            <input type="text" name="nombre" id="nombre" placeholder=" " value="<?php echo $alumno->nombre ?>">
                            <label for="nombre">Nombre</label>
                        </div>
                        <div class="container-in">
                            <input type="text" name="primerApellido" id="primerApellido" placeholder=" " value="<?php echo $alumno->primer_apellido ?>">
                            <label for="primerApellido">Primer Apellido</label>
                        </div>
                        <div class="container-in">
                            <input type="text" name="segundoApellido" id="segundoApellido" placeholder=" " value="<?php echo $alumno->segundo_apellido ?>">
                            <label for="segundoApellido">Segundo Apellido</label>
                        </div>
                        <div class="container-in">
                            <input type="numeric" name="examenParcial" id="examenParcial" placeholder=" " min="0" value="<?php echo $alumno->examen_parcial ?>">
                            <label for="examenParcial">Examen Parcial</label>
                        </div>
                        <div class="container-in">
                            <input type="numeric" name="examenFinal" id="examenFinal" placeholder=" " min="0" value="<?php echo $alumno->examen_final ?>">
                            <label for="examenFinal">Examen Final</label>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
                    </div>
                    <div class="container-in">
                        <input type="submit" value="Editar " name="editar">
                    </div>
                </form>
            </div>
        </section>
    </main>

</body>

</html>