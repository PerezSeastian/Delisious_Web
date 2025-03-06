<?php

class Deliciuis
{
    public static function Login($email, $pass)
    {

        include("database.php");
        $consultamos_registro = " SELECT * FROM clientes Where email = '" . $email . "' and password = '" . $pass . "'";
        $sql = mysqli_query($con, $consultamos_registro);
        $contador = mysqli_num_rows($sql);

        if ($contador > 0) {
            $row = mysqli_fetch_array($sql);

            session_start();
            $_SESSION["cliente"] = $row["name"];

            $resultados = 1;
        } else {
            $resultados = 0;

        }

        return $resultados;

    }

    public static function InsertarUsuario($nombre, $email, $pass)
    {
        include("database.php");
        $insert = "INSERT INTO `clientes` (`name`, `email`, `password`, `altaa_cliente`) VALUES ('" . $nombre . "', '" . $email . "', '" . $pass . "', now())";
        //$insert = "INSERT INTO Clientes ('email', 'password', 'name') VALUES ('".$email."', '".$password."', '".$nombre."')";
        $sql = mysqli_query($con, $insert);
        return "Se guardo Correctamente";
    }

    public static function Reservacion($nombre, $email, $ocacion, $fecha, $mensaje)
    {
        include("database.php");
        $insert = "INSERT INTO `cotisacion_reserva` (`name`, `email`, `ocacion`, `fecha`, `mensaje`, `estatus`) VALUES ('".$nombre."', '".$email."', '".$ocacion."', '".$date."', '".$mensaje."', NOW())";
        
        $sql = mysqli_query($con, $insert);
        if ($sql) {
            return "Reserva Completada con Éxito.";
        } else {
            return "Error al registrar la reserva: " . mysqli_error($con);
        }
    }
}



?>