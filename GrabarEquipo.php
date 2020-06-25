<?php 

include 'Conexion.php';

$con = Conexion::conectar();
$con->query("insert equipos values('".$_POST['txtequipo']."','".$_POST['cbodepartamento']."','".$_POST['txtestadio']."','".$_POST['txtdireccion']."')");
$con->query("insert posiciones values('".$_POST['txtequipo']."','0','0','0','0','0','0','0')");
$con->close();
header("location:Index.html");

?>