<?php  
	if (!isset($_POST['oculto'])) {
		exit();
	}

	include 'conexionBD.php';
	
    $id =$_POST['id'];
    $nombre =$_POST['nombre'];
    $usuario =$_POST['usuario'];
    $clave =$_POST['clave'];

	$sentencia = $bd->prepare("INSERT INTO usuarios(id,nombre,usuario,clave) VALUES (?,?,?,?);");
	$resultado = $sentencia->execute([$id,$nombre,$usuario,$clave]);

	if ($resultado === TRUE) {
		header('Location: index.php');
	}else{
		header('Location: error.php');
	}
?>