<?php
include("funciones.php");
$confirmar = Deliciuis::ConfirmarR($_POST["nombre"], $_POST["email"], $_POST["ocacion"], $_POST["fecha"], $_POST["mensaje"]);
echo $confirmar;