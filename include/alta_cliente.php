<?php
include("funciones.php");
$registro = Deliciuis::InsertarUsuario($_POST["name"], $_POST["email"], $_POST["password"]);
echo $registro;


?>
