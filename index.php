<?php
include_once'conexion.php';
$conectar = new ConexionPDO($host,$db,$user,$password);
$conectar->Conectar();
echo "<br><br>";
$conectar->Desconectar();

?>
