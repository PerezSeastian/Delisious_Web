<?php

include("funciones.php");

 
    $id = $_POST["id"];
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $mensaje = Deliciuis::EditarUsuario($id, $nombre, $email, $pass);
    echo $mensaje;

?>