<?php

include("funciones.php");

$login = Deliciuis::Login($_POST["email"],$_POST["pas"]);
echo $login;

?>