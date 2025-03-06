<?php

include("funciones.php");

$id = $_POST["id"]; 
$eliminacion = Deliciuis::EliminarUsuario($id);
echo $eliminacion;
?>