<?php
    if(isset($_POST['oculto'])){      
		include 'conexionBD.php';
	
		$id =$_POST['id'];
		$nombre =$_POST['nombre'];
		$usuario =$_POST['usuario'];
		$contraseña =$_POST['contraseña'];
	
		
		$sentencia = $bd->prepare("DELETE FROM  usuarios WHERE id= ?");
		$resultado = $sentencia->execute([$id,]);
	
	
		if ($resultado === TRUE) {
			header('Location: index.php');
		}else{
			header('Location: error.php');
		}
    }
?>