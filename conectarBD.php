<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$pwd = getenv('MY_PWD');

@ $conexion = new mysqli('eu-cdbr-west-02.cleardb.net', 'bd20a27a0c1a32', $pwd, 'heroku_b74fe212de823a2');

$error = $conexion->connect_errno;

if ($error != null) {
    echo "<p>Error $error conectando a la base de datos: 
    $conexion->connect_error</p>";
    exit();
} else {
    echo "Conexion exitosa";    
}

mysqli_set_charset($conexion,"utf8");

?>