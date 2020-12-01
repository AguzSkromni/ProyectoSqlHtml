<?php
    $pass="Mlg090911$";
    $servidor="localhost";
    $usuario="root";
    $bandera=false;
    echo'<hi>Otorgar Privilegios a usuarios.</h1>';
    $coneccion=mysqli_connect($servidor,$usuario,$pass);
    if(!$coneccion)
    {
        echo("Error en la conección:".mysqli_error());
    }
    else
    {
        $resultado=mysqli_query($coneccion,"SHOW DATABASES");
        If(!$resultado)
        {
            echo"No existe ninguna BD en el servidor","<br>";
        }
        else
        {
         $num_bd=mysqli_num_rows($resultado);
        $num_bd=mysqli_num_fields($resultado);
        echo'<form action="mod_user2.php"method="post"id=privilegios"title="Privilegios a Usuarios">';
        echo'<label>User ID:</label>';
        echo'input name="m_userid"type="text"required id="m_userid"form="privilegios"tltle="User ID"size="10"maxiength="10">';
        echo'<br>';
        echo'<label>Base de datos:</label>';
        echo'<select name="s_bd"required id"s_bd"form="privilegios"title="Seleccion de DB>';
        echo'<option selected>...</option>';
        for ($i=0;$i<$num_bd;$i++)
        {
            $base=mysqli_ferch_array($resultado);
            for($j=0;$j<$num_col;$j++)
            {
                echo'<option>'.$base[$j].'</option>';
            }
            echo"<br>";
        }
        echo'<select>';
        echo'<br>';
        echo'<label>Todos los Privilegios:</label><input name="todos"type="checkbox"id="Todos title="Todos los privilegios"value="all prileges">';//checar si esta completo
        echo'<br>';
        echo'<label>Alter:</label><input name="alter"type="checkbox" id="alter"title="Modificar BD" value="alter">';
        echo'<label>Create:</label><input name="create"type="checkbox" id="create"title="Creatión BD" value="create">';
        echo'<label>Drop:</label><input name="drop"type="checkbox" id="drop"title="Borrar BD" value="drop">';
        echo'<label>Grant:</label><input name="grant"type="checkbox" id="grant"title="Privilegios BD" value="grant option">';
        echo'<label>Index:</label><input name="index"type="checkbox" id="index"title="Indices en BD" value="index">';
        echo'<label>Insert:</label><input name="insert"type="checkbox" id="inserttitle="insertar en BD" value="insert">';
        echo'<label>Select:</label><input name="select"type="checkbox" id="select"title="Querys en BD" value="select">';
        echo'<label>Update:</label><input name="update"type="checkbox" id="update"title="Update en BD" value="update">';
        echo'<br>';
        echo'<input name="b_priv" type="submit" id="b_priv"formation="mod_user2.php" title=Privilegios de usuarios" value=enviar>';
        echo'<input name="bo_priv" type="reset"id="bo_priv"form="privilegios"title="Formulario Privilegios"value="Borrar">';
        echo'<br>';
        }
        mysqli_close($coneccion);
    }
    echo'<form action="../admin_user.html"method="post">';
    echo'<input type="sumit"formaction="../admin_user.html"value="regresar">';
    echo'</form>';
?>