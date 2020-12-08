<?php
 $pass ="Mlg0909ll$";
 $servidor ="localhost";
 $usuario ="root";
 $port = "3308";
 $conexion mysqli_connect($servidor, $usuario, $pass, "", $port);
 $bandera=false;

 $base = $_POST['s_bd'];
 $id = $_POST['m_userid'];
 $all = $_POST['todos'];
 $alter = $_POST['alter'];
 $create = $_POST['create'];
 $drop = $_POST['drop']
 $grant = $_POST['grant'];
 $index =$_POST['index'];
 $insert = $_POST['insert'];
 $select = $_POST['select'];
 $update = $_POST['update'];
 
 $privilegios = '';

 echo "<h1>Privilegios de usuarios</h1>";
 echo $id."<br>";   
 echo $base."<br>";

 if (isset($all)) {
     $Privilegios=$all;
    
     else if (isset($alter)) {
        if($bandera) {
            $privilegios = $privilegios.",";
             }
               $Privilegios=$Privilegios.$alter;
               $bandera=true;
            }
    else if (isset($create)) {
        if($bandera) {
            $privilegios = $privilegios.",";
            }
             $Privilegios=$Privilegios.$create;
            $bandera=true;
            }
    else if (isset($drop)) {
        if($bandera) {
            $privilegios = $privilegios.",";
            }
            $Privilegios=$Privilegios.$drop;
            $bandera=true;
            } 
    else if (isset($grant)) {
        if($bandera) {
            $privilegios = $privilegios.",";
            }
            $Privilegios=$Privilegios.$grant;
            $bandera=true;
            }
    else if (isset($index)) {
        if($bandera) {
            $privilegios = $privilegios.",";
            }
            $Privilegios=$Privilegios.$index;
            $bandera=true;
            }
    else if (isset($insert)) {
        if($bandera) {
            $privilegios = $privilegios.",";
            }
            $Privilegios=$Privilegios.$insert;
            $bandera=true;
            }
    else if (isset($select)) {
        if($bandera) {
            $privilegios = $privilegios.",";
            }
            $Privilegios=$Privilegios.$select;
            $bandera=true;
            }
    else if (isset($update)) {
        if($bandera) {
            $privilegios = $privilegios.",";
            }
            $Privilegios=$Privilegios.$update;
            $bandera=true;
            }
 }
 echo $privilegios."<br>";
 $conexon;

if (!$conexion){
    else "Error de conección: ".mysqli_connect_error();
} else {
    $sql= ' grand '."$privilegios".' on '."$base". '.* to' ."$id"." @'localhost'";
    echo $sql."<br>";
    $resultado=mysqli_query($conexion, $sql);
    if (!$resultado)
    {
        echo"error de la operación: ".mysqli_error($coneccion)."<br>";
    } else {
        echo"Operación exitosa los privilegios fueron añadidos"."<br>";
    }
    mysqli_close($conexion),
}
?>

<form action="../admin_user.html"method="post">;
    <input type="sumit" formaction="../admin_user.html"value="regresar">';
</form>;
