<?php
include("funciones.php");
$registro = Deliciuis::AgregarPro($_POST["id"], $_POST["nombre"], $_POST["descripción"], $_POST["precio"], $_FILES["img"]);
echo $registro;
?>