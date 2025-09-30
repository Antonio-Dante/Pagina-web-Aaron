<?php
    include('./logica/conexion.php');
    $consultasql = "SELECT * FROM usuarios";

    $conexion->query($consultasql);
    $resultado = $conexion->query($consultasql);

    if($resultado){
        echo("Con datos");
    }else{
        echo("Sin datos");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Lista de datos</h1>
    </div>
    <hr>

<div>
    <table border="1px">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Acciones</th>
        </tr>

        <?php while($row = $resultado ->fetch_assoc()){ ?>

        <tr>
            <td> <?php echo $row['id']; ?> </td>
            <td> <?php echo $row['nombre']; ?> </td>
            <td> <?php echo $row['email']; ?></td>
            <td> <?php echo $row['telefono']; ?></td>
            <td>
                <a href="">Editar</a>
                <a href="">Eliminar</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>

</body>
</html>