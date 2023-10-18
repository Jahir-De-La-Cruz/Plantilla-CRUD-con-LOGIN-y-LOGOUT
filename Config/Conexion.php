<?php 

    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "practica_crud_db";

    $conexion = mysqli_connect($host, $user, $password, $db);

    if ($conexion === FALSE) {
        echo '<h1>Error al conectarse a la base de datos</h1>';
    }

?>