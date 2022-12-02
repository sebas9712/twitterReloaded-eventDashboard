<?php
function consultaBaseDatos($consulta){
    $conexion = mysqli_connect("db", "root", "root", "Twitter_Db");
    $resultado = mysqli_query($conexion, $consulta);
    if($resultado){
        return $resultado;
    }else{
        return FALSE;
    }
    mysqli_close($conexion);
}
?>