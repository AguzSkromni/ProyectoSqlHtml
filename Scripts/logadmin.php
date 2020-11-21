<?php
    //Definiendo Parametros
    $pass = $_POST['pass'];
    $servidor="localhost";
    $usuario="root";
    $basedatos="sakila";

    //Creando la conexion a la base de datos
    $coneccion = mysqli_connect($servidor, $usuario, $pass, $basedatos);

    //Checando la Coneccion
    if(!$coneccion)
    {
        echo("Error en la coneccion:" .mysqli_connect_error());
    }
    else
    { 
        echo "Coneccion exitosa";
        mysqli_close($coneccion);
    }
    
    echo '<form action="../loginadmin.html" method="post">';
    echo '<input type="submit" formaction="../loginadmin.html" value="Regresar">';
    echo '</form>';

?>