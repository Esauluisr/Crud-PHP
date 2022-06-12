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
    <title>Eliminar datos </title>
</head>
<body>
    
    <div class="contenedor">

        <form action="eliminarConec.php" method="post">
        <h1>Eliminar Datos </h1>
        <input type="hidden" name="oculto" value="1">
        <input type="text" class="form-control" name="id" placeholder="&#128272 Id" value="">
        <input type="text" class="form-control" name="nombre" placeholder="&#128272 Nombre" value="">
        <input type="text" class="form-control" name="usuario" placeholder="&#128272 Usuario" value="">
        <input type="text" class="form-control" name="contraseña" placeholder="&#128272 Contraseña" value="">
        <input type="submit" name="submit" value="Eliminar"></br></br></br></br></br>

        <h1> Datos de los Usuarios  </h1>
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
        </div>

        
        </form>
    </div>
</body>

</html>