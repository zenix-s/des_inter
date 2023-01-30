<!-- <?php
if(isset($_POST['registrar'])){
    include 'conexion.php';
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['correo'];
    $categoria = $_POST['categoria'];
    // VALIDACION
    $valid = validate($nombre, $apellidos, $email);
    // // EVIAR DATOS
    if($valid){
        $sql = $conexion->prepare("INSERT INTO registros(nombre, apellidos, correo, categoria) VALUES(?,?,?,?)");
        $resultado = $sql->execute([$nombre,$apellidos,$email,$categoria]);
        if($resultado === true){
            header('Location: index.php');
        }else{
            echo 'Error al insertar el formulario';
        }
    }else{
        header('Location: index.php');
    }
}
function validate($nombre, $apellidos, $email){
    if(empty($nombre) || empty($apellidos) || empty($email)) return false;
    if(!preg_match('/^[a-zA-ZÀ-ÿ\ñ\Ñ]+(\s*[a-zA-ZÀ-ÿ\ñ\ñ]*)*[a-zA-ZÀ-ÿ\ñ\Ñ]+$/',$nombre) || (strlen($nombre) > 30)) return false;
    if(!preg_match('/^[a-zA-ZÀ-ÿ\ñ\Ñ]+(\s*[a-zA-ZÀ-ÿ\ñ\ñ]*)*[a-zA-ZÀ-ÿ\ñ\Ñ]+$/',$apellidos) || (strlen($apellidos) > 100)) return false;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) return false;
    return true;
}
?> -->