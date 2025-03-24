<?php

class Deliciuis
{
    public static function Login($email, $pass)
    {
    include("database.php");

        if ($email === "delisiousfoodfu@gmail.com" && $pass === "delifood2018") {
            session_start();
            $_SESSION += ["cliente" => "Administrador", "admin" => true];
            return 2;
        } //Inicio de Sesión para el Administrador.

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

    public static function Reservacion($nombre, $email, $ocacion, $fecha, $telefono, $mensaje_cliente)
    {
        include("database.php");
        $insert = "INSERT INTO cotisacion_reserva (`name`, `email`, `ocacion`, `fecha`, `mensaje`, `telefono` , `estatus`) VALUES ('" . $nombre . "', '" . $email . "', '" . $ocacion . "', '". $fecha . "', '".$mensaje_cliente."', '".$telefono."', '1')";

        $sql = mysqli_query($con, $insert);
        if ($sql) {

            $from = "delisiousfoodfu@gmail.com";
            $to = "".$email.",delisiousfoodfu@gmail.com";
            $subject = "Delicius Food..";
            $mensaje ="Estimado/a cliente, se ha registrado una solicitud de reserva a nombre de ".$nombre."  para la ocacion ".$ocacion." el dia ".$fecha." mensaje del cliente  ".$mensaje_cliente.", para cualquier consulta, puede comunicarse con el cliente al telefono: ".$telefono."";
            
            // Configuración de los encabezados
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n"; // Establecer el tipo de contenido como HTML
            $headers .= "From: " . $from . "\r\n"; // De quien es el correo
            
            // Enviar el correo
            if(mail($to, $subject, $mensaje, $headers)) {
                //echo "Correo enviado exitosamente!";
            } else {
                echo "Error al enviar el correo.";
            }

            return "Reserva Completada con Éxito.";
        } else {
            return "Error al registrar la reserva: " . mysqli_error($con);
        }
    }

    public static function EliminarUsuario($id)
    {
        include("database.php");
        $delete = "DELETE FROM clientes WHERE id = '" . $id . "'";
        $sql = mysqli_query($con, $delete);
        if ($sql) {
            return "Registro Eliminado";
        } else {
            return "Error al eliminar";
        }
    }

    public static function EditarUsuario($id, $nombre, $email, $pass) {
        include("database.php");
    
        // Consulta preparada para actualizar usuario
        $update = "UPDATE `clientes` SET `name` = ?, `email` = ?, `password` = ? WHERE `id` = ?";
        if ($stmt = mysqli_prepare($con, $update)) {


            // Vincular parámetros y ejecutar
            mysqli_stmt_bind_param($stmt, "sssi", $nombre, $email, $pass, $id);
            $resultado = mysqli_stmt_execute($stmt) ? "Registro Actualizado" : "Error al actualizar";
            mysqli_stmt_close($stmt);
            return $resultado;
            
        }

        return "Error en la preparación de la consulta";
    }
    public static function AgregarPro($id, $nombre, $descripción, $precio, $img)
    {
        include("database.php");


        if ($_FILES['img']['error'] == 0) {
            $directorio_destino = "../uploads/";
            $nombre_archivo = basename($_FILES["img"]["name"]);
            $ruta_destino = $directorio_destino . $nombre_archivo;

            if (move_uploaded_file($_FILES["img"]["tmp_name"], $ruta_destino)) {
                $img = $ruta_destino;
            } else {
            }
        }

        if (!empty($id)) {
            $query = "UPDATE plato SET nombre='$nombre', descripción='$descripción', precio='$precio', img='$img' WHERE id=$id";
        } else {
            $query = "INSERT INTO plato (nombre, descripción, precio, img) VALUES ('$nombre', '$descripción', '$precio', '$img')";
        }
        $resultado = mysqli_query($con, $query);
        if ($resultado) {
            Header("Location: /foodee-master/indexAdmin.php");
        } else {
        }

    }
    public static function EliminarP($id)
    {
        include("database.php");
        $delete = "DELETE FROM plato WHERE id = '" . $id . "'";
        $sql = mysqli_query($con, $delete);
        if ($sql) {
            return "Platillo Eliminado";
        } else {
            return "Error al eliminar";
        }
    }

    public static function BorrarReserva($id){
        include("database.php");
        $delete = "DELETE FROM cotisacion_reserva WHERE id = '$id'";
        $sql = mysqli_query($con, $delete);
        if ($sql) {
            return "Reserva Eliminada";
        } else {
            return "Error al eliminar";
        }
    }


 /*   public static function ConfirmarR($nombre, $email, $ocacion, $fecha, $mensaje){
        include("database.php");
        if(isset($_POST['generar'])){
            //aqui estas validando que sea diferente a vacio entonces falta un else para que sepas por eso se lo agregue
            if(!empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['ocacion']) && !empty($_POST['fecha']) && !empty($_POST['mensaje'])){
                $nombre = $_POST['nombre'];
                $email = $_POST['email'];
                $ocacion = $_POST['ocacion'];
                $fecha = $_POST['fecha'];
                $mensaje_cliente = $_POST['mensaje'];

                $from = "evelintorrescruz918@gmail.com";
                $to = "".$_POST['email'].",cruzevelin392@gmail.com";
                $subject = "Delicius Food..";
                $mensaje ="Reservo ".$nombre."  Para la ocacion ".$ocacion." el dia ".$fecha." mensaje ".$mensaje_cliente."";
                
                // Configuración de los encabezados
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n"; // Establecer el tipo de contenido como HTML
                $headers .= "From: " . $from . "\r\n"; // De quien es el correo
                
                // Enviar el correo
                if(mail($to, $subject, $mensaje, $headers)) {
                    echo "Correo enviado exitosamente!";
                } else {
                    echo "Error al enviar el correo.";
                }


            }else{
                echo "error al guardar reserva";
            }

        }


    }*/
}
?>