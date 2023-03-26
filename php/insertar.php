<?php

include("conexion.php");
$con=conectar();

$id_usuario=$_POST['id_usuario'];
$nombre=$_POST['nombre'];
$edad=$_POST['edad'];
$ciudad=$_POST['ciudad'];
$usuario=$_POST['usuario'];
$pass=$_POST['pass'];


$sql="INSERT INTO usuarios VALUES('$id_usuario','$nombre','$edad','$ciudad','$usuario','$pass')";

$query= mysqli_query($con,$sql);

if($query){

    
    Header("Location: info_usuario.php");
    
    
}else {
}
?>