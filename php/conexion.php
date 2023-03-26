<?php

function conectar()
{

    // asigno variables

    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $database = "login_usuario";

    $con = mysqli_connect($servidor, $usuario, $password); // le decimos al servidor que busque todas las bases de datos que esten en el PC.

    mysqli_select_db($con, $database); // ya encontradas todas las bases de datos le decimos que nos busque todo lo que esta dentro de $database.

    return $con; // retornamos la conexión.

}


?>