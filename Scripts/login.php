<?php
    //Definiendo Parametros
    $pass = "";
    $servidor="localhost";
    $usuario="root";
    $basedatos="sys";

    //Creando la conexion a la base de datos
    $coneccion = mysqli_connect($servidor, $usuario, $pass, $basedatos);


?>