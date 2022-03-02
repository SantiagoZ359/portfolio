<?php
//conectamos con el servidor
//verificamos la conexion
if(!$concectar){
    echo"No se pudo conectar con el servidor";
}else{

    $base=mysql_select_db('web');
}
?>