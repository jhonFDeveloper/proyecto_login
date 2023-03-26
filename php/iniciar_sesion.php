<?php

include("conexion.php");
$con = conectar();

$usuario = $_POST["usuario"];
$pass = $_POST["pass"];

$sql = "SELECT * FROM usuarios WHERE usuario='$usuario'";

$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);

print_r($row);

if (!$row) {

    echo "<script> alert('Este usuario no está registrado'); window.location='../login.html'</script>";
}

if ($pass == $row['pass']) {

    echo "<script>window.location='actualizar.php?id=" . $row['id_usuario'] . " '</script>";

}else{

    echo "<script> alert('la contraseña es incorrecta'); window.location='../login.html'</script>";

}








?>