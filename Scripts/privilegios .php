<?php
 $pass ="Mlg090911$";
 $servidor ="localhost";
 $usuario ="root";
 $bandera=false;
 $base = $_POST['s_bd'];
 $id = $_POST['m_userid'];
 $all = $_POST['todos'];
 $alter = $_POST['alter'];
 $create = $_POST['create'];
 $drop = $_POST['drop'];
 $grant = $_POST['grant'];
 $index =$_POST['index'];
 $insert = $_POST['insert'];
 $select = $_POST['select'];
 $update = $_POST['update'];
 echo'<h1>Privilegios a usuarios</h1>';
 echo $id.'<br>';   
 echo $base.'<br>';
 $Privilegios='';
 if ($all<>'')
 {
     $Privilegios=$all;
 }
 else
 {
     if($alter<>'')
     {
         $Privilegios=$Privilegios.$alter;
         $bandera=true;
     }
     if($create<>'')
     {
         if($bandera)
         {
             $Privilegios=$Privilegios.',';
         }
         $Privilegios=$Privilegios.$create;
         $bandera=true;
     }
     if($drop<>'')
     {
         if($bandera)
         {
             $Privilegios=$Privilegios.',';
         }
         $Privilegios=$Privilegios.$drop;
         $bandera=true;
     }
     if($grant<>'')
     {
         if($bandera)
         {
             $Privilegios=$Privilegios.',';
         }
         $Privilegios=$Privilegios.$grant;
         $bandera=true;
     }
     if($index<>'')
     {
         if($bandera)
         {
             $Privilegios=$Privilegios.',';
         }
         $Privilegios=$Privilegios.$index;
         $bandera=true;
     }
     if($insert<>'')
     {
        if($bandera)
        {
            $Privilegios=$Privilegios.',';
        }
        $Privilegios=$Privilegios.$insert;
        $bandera=true;
     }
     if($select<>'')
     {
         if($bandera)
         {
             $Privilegios=$Privilegios.',';
         }
         $Privilegios=$Privilegios.$select;
         $bandera=true;
     } 
     if($update<>'')
     {
         if($bandera)
         {
             $Privilegios=$Privilegios.',';
         }
         $Privilegios=$Privilegios.$update;
         $bandera=true;
     }
 }
 echo $privilegios.'<br>';
 $coneccion=mysqli_connect($servidor,$usuario,$pass); // checar si esta bien
if (!$coneccion)
{
    else("Error de conección:".mysqli_connect_error());
}
else
{
    $sql='grand'.$privilegios."on".$base."."to".$id."@localhost",";
    echo$sql.'<br>';
    $resultado=mysqli_query($coneccion,$sql);
    if ($resultado)
    {
        echo"error de la operación:".mysqli_error($coneccion).'<br>';
    }
    else
    {
        echo"Operación exitosa los privilegios fueron añadidos de manera correcta."."<br>";
    }
    mysqli_close($coneccion),
}
echo'<form action="../admin_user.html"method="post">';
echo'<input type="sumit"formaction="../admin_user.html"value="regresar">';
echo'</form>';
?>