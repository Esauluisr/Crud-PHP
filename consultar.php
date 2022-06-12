<?php
    include 'conexionBD.php';
    $sentencia = $bd->query("SELECT *FROM usuarios;");
    $usurio = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/estilos.CSS">
    <link rel="stylesheet" href="style/tabla.CSS">
    <title>Consultar Datos </title>
</head>
<body>
    
    <div class="contenedor">
        
        <form action="index.php" method="post">
            
        <h1>Consultar Datos </h1></br>
    
        </br>
        <div id="main-container">
            
            <table>
			    <thead>
				    <tr>
					    <th>ID</th>
					    <th>Nombre</th>
                        <th>Usuario</th>
                        <th>Contraseña</th>
				    </tr>
                </thead>
                
                <?php 
                    foreach($usurio as $dato)
                    {
                        ?>
                        <tr>
				        <td><?php echo $dato->id; ?></td>
                        <td><?php echo $dato->nombre; ?></td>
                        <td><?php echo $dato->usuario; ?></td>
				        <td><?php echo $dato->clave;?></td>
			            </tr>
                        <?php
                        
                    }
                ?>
            </table>
            </br>
            </br>
    
        </div>
        <input type="submit" name="submit" value="Regresar">
        </form>
    </div>
</body>
</html>