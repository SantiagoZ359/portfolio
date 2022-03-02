<?php
    //conectamos con el servidor
    //verificamos la conexion
    if(!$concectar){
        echo"No se pudo conectar con el servidor";
    }else{

        $base=mysql_select_db('web');
        if(!$base){
            echo"No se encontro la base de datos";
        }
    }
    //recupera las variables
    $nombre=$_POST['nombre'];
    $correo=$_POST['correo'];
    $mensaje=$_POST['mensaje'];
    //hacemos la sentencia de sql
    $sql="INSERT INTO datos VALUES('$nombre',
                                   '$correo',
                                   '$mensaje')";
    //ejecutamos la sentencia de sql
    $ejecutar=mysql_query($sql);
    //verificamos la ejecucion
    if(!$ejecutar){
        echo="Hubo algun error";
    }else{
        echo"Datos guardados correctamente<br><a href='index.html'>Volver</a>"
    }
?>