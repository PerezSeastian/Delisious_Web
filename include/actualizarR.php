<?php
include("funciones.php");


    $id = $_POST['id'];
    $estatus = $_POST['estatus'];
    $resultado = Deliciuis::ActualizarReserva($id, $estatus);
    echo $resultado;
?>
