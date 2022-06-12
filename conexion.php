<?php
    $conexion= null;
    $servidor= 'localhost';
    $bd='pweb21';
    $user='root';
    $pass='';

    try{
        $conexion = new PDO('mysql:host='.$servidor.';dbname='.$bd ,$user ,$pass);
        $u =$_POST['id'];
        $e =$_POST['nombre'];
        $r =$_POST['usuario'];
        $t =$_POST['clave'];

        $conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = $conexion->prepare("SELECT * FROM usuarios WHERE id = :u AND nombre = :e AND usuario = :r AND clave = :t");
        $query->bindParam(":u", $u);
        $query->bindParam(":e", $e);
        $query->bindParam(":r", $r);
        $query->bindParam(":t", $t);
        $query->execute();
        $user= $query->fetch(PDO:: FETCH_ASSOC);
        if($user){
            header("location:index.php");
        }else{
            header("location:error.php");
        }

    }catch (PDOException $e){
        echo "error de conexion ";
        exit;
    }   
    return $conexion;                                                                

?>