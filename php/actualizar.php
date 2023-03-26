<?php

include("conexion.php");
$con = conectar();

$id = $_GET['id'];

$sql = "SELECT * FROM usuarios WHERE id_usuario='$id'";

$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Actualizar Datos</title>

    <style>
        body {

            background: linear-gradient(to right, #C39BD3, #76D7C4);
        }
    </style>
</head>

<body>

    <div class="container mt-5 mb-5 shadow">
        <div class="row text-center">
            <h1>Actualizar información</h1>

            <form action="update.php" method="POST">


                <input type="hidden" name="id_usuario" value="<?php echo $row['id_usuario'] ?>">


                <input type="text" class="form-control mb-3 mt-5" name="nombre" placeholder="Nombre"
                    value="<?php echo $row['nombre'] ?>">


                <input type="text" class="form-control mb-3" name="edad" placeholder="Edad"
                    value="<?php echo $row['edad'] ?>">


                <input type="text" class="form-control mb-3 " name="ciudad" placeholder="Ciudad"
                    value="<?php echo $row['ciudad'] ?>">



                <div class="pb-5 pt-5">

                    <h2>Datos de inicio de sesión</h2>
                    <input type="text" class="form-control mb-3 mt-5" name="usuario" placeholder="Usuario"
                        value="<?php echo $row['usuario'] ?>">


                    <input type="text" class="form-control mb-3" name="pass" placeholder="Contraseña"
                        value="<?php echo $row['pass'] ?>">

                </div>

                <div class="d-grid gap-2 col-6 mx-auto pb-5">

                    <button class="btn btn-primary" type="submit">Actualizar datos</button>

                </div>



            </form>

        </div>

    </div>




</body>

</html>