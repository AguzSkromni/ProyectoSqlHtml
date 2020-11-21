<?php

$pass="";
$servidor="localhost";
$usuario="root";
$basedatos="sakila";
$coneccion=mysqli_connect($servidor,$usuario,$pass,$basedatos);

if(!$coneccion)
{
    echo("Error en la coneccion: ".mysqli_connect_error());
}
else
{
    $resultado=mysqli_query($coneccion,"Show Databases");
    if(!$resultado)
    {
        echo "No existe ninguna Base de Datos en el servidor"."<br>";
    }
    else
    {
        $num_bd=mysqli_num_rows($resultado);
        $num_col=mysqli_num_fields($resultado);
        echo "En numero de BD en el servidor es: ".$num_bd."<br>";
        echo "Numero de columnas del Query: ".$num_col."<br>";
        for($i=0; $i<$num_bd;$i++)
        {
            $base=mysqli_fetch_array($resultado);
            for($j=0; $j<$num_col;$j++)
            {
                echo "Nombre de la BD: ".$base[$j]." ";
            }
            echo "<br>";
        }
    }
    mysqli_close($coneccion);
}

    echo '<form action="../loginadmin.html" method="post">';
    echo '<input type="submit" formaction="../loginadmin.html" value="Regresar">';
    echo '</form>';

?>