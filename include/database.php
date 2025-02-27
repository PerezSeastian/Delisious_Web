<?php

$usuario = "root";
$password = "";
$database = "restaurante";
$host = "127.0.0.1";


$con = mysqli_connect($host,$usuario,$password,$database);

if(!$con){
    die("fallo la conexion:". mysqli_connect_error());
}else{
    //echo "se conecto correctamente";
}

?>