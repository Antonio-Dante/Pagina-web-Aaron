<?php
$nombre_get = "Antonio";
$primerApellido_get ="Martinez";

echo($nombre_get);
echo('<h1>'.$primerApellido_get.'</h1>');

$nombreCompleto = $nombre_get. " " .$primerApellido_get

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2>Hola mundo</h2>
    <h4> <?php echo($nombre_get)?> </h4>
    
</body>
</html>