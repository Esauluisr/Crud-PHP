<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/estilos.CSS">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Shippori+Antique&display=swap" >
    <title>Login </title>
</head>
<body>
    
    <div class="contenedor">
        
        <form action="conexion.php" method="post">
        <h1>Iniciar Seccion</h1>
        <input type="text" class="form-control" name="id" placeholder="&#128272 Id" value="">
        <input type="text" class="form-control" name="nombre" placeholder="&#128272 Nombre" value="">
        <input type="text" class="form-control" name="usuario" placeholder="&#128272 Usuario" value="">
        <input type="text" class="form-control" name="clave" placeholder="&#128272 Contraseña" value="">
    
        <input type="submit" name="submit" value="Iniciar Seccion">
        </form>
    </div>
</body>

</html>

