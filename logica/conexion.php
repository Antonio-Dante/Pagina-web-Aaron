<?php
$host = '127.0.0.1:3306';
$user = 'root';
$password = 'AntonioDante26';
$dbname = 'crud_app';
$conexion = new mysqli($host, $user, $password, $dbname);

if($conexion -> connect_error){
    die('Error en la conexion a la DB :( : '.$conexion -> connct_error);
}else{
    echo "Conexion realizada";
}
?>

?>