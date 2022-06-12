<?php  
	$contraseña = '';
	$usuario = 'root';
	$nombrebd= 'pweb21';

	try {
		$bd = new PDO('mysql:host=localhost;dbname='.$nombrebd,$usuario,$contraseña);
	} catch (Exception $e) {
		echo "Error de conexión ".$e->getMessage();
	}

?>