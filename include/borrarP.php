<?php

include("funciones.php");

$id = $_POST["id"]; 
$eliminacion = Deliciuis::EliminarP($id);
echo $eliminacion;
?>