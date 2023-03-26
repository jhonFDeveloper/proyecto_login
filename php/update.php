
<?php

include("conexion.php");
$con=conectar();

$id_usuario=$_POST['id_usuario'];
$nombre=$_POST['nombre'];
$edad=$_POST['edad'];
$ciudad=$_POST['ciudad'];
$usuario=$_POST['usuario'];
$pass=$_POST['pass'];

$sql="UPDATE usuarios SET  nombre='$nombre',edad='$edad',ciudad='$ciudad',usuario='$usuario',pass='$pass' WHERE id_usuario='$id_usuario'";

$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: info_usuario.php");
    }
?>