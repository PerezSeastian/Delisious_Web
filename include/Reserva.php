<?php
include("funciones.php");
$registro = Deliciuis::Reservacion($_POST["name"], $_POST["email"], $_POST["ocacion"], $_POST["date"], $_POST["mensaje"]);
echo $registro;


?>