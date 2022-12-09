<?php
/* ini_set Establece el valor de una directiva  */
	ini_set('display_errors', 1);
/*errores de inicio */
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
?>
<?PHP
	if(isset($_POST['insertar'])){
		
		//tiene que contener la conexion a la base datos
		include("conexion.php");
		
		//tengo que guardar en variables los datos que el usuario introduce
		
		$nombre = $_POST['nombre'];
		$apellidos = $_POST['apellidos'];
		$correo = $_POST['correo'];
		$usuario = $_POST['usuario'];
		$contrasenia = $_POST['clave'];
		$telefono = $_POST['telefono'];
		
		//crear una consulta tipo insertar con prepare
		
		$sql = $mbd -> prepare("INSERT INTO usuarios(nombre,apellidos,correo,usuario,clave,telefono) 
		VALUES(?,?,?,?,?,?)");
		
		
		//ejecutar los datos de la consulta
		$resultado = $sql->execute([$nombre,$apellidos,$correo,$usuario,$contrasenia,$telefono]);
		
			if($resultado === true){
				//llevame de nuevo al formulario
				header('Location: index.php');
			} else{
				echo 'Error al insertar el registro';
				
			}
		
		
		
	}











?>