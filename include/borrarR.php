<?php

include("funciones.php");

$id = $_POST["id"]; 
$eliminacion = Deliciuis::BorrarReserva($id);
echo $eliminacion;
?>