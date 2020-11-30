<!DOCTYPE html>
<html lang="en">
<body>
    <header class="cover">
        <div class="contenedor contenido-header">
            <h1 class="h1class">Alta de Usuario</h1>
        </div>
    </header>
<?php
require 'login.php';

    $Contraseña = $_POST['Contraseña'];
    $ID = $_POST['ID'];
 
    if(!$coneccion)
    {
        
        echo("Error en la coneccion:" .mysqli_connect_error());
    }
    else
    { 
        $sql = "CREATE USER '$ID'@'localhost' IDENTIFIED BY '$Contraseña';";

        $query = mysqli_query($coneccion, $sql);
        echo   '<div class="centrar"><p>Creado correctamente el Usuario: '; print $ID; echo'</p></div>';

        mysqli_close($coneccion);
    }
    
    echo '<div class="centrar">';
    echo '<form action="../loginadmin.html" method="post">';
    echo '<input type="submit" formaction="../index.html" value="Regresar">';
    echo '</form>';
    echo '</div>';
?>

</body>

</html>