<?php
include("funciones.php");
$registro = Deliciuis::Reservacion($_POST["name"], $_POST["email"], $_POST["ocacion"], $_POST["fecha"], $_POST["telefono"], $_POST["mensaje"]);
echo $registro;


?>