<?php
if (isset($_POST['enviar'])){/*Si el boton enviar fue precionado entrara al condicional*/
    if (!empty($_REQUEST["nombre"]) && !empty($_REQUEST["email"]) && !empty($_REQUEST["asunto"]) && !empty($_REQUEST["mensaje"])){/*Si todas las casillas no estan vacias entra al condicional*/
        $nombre = $_REQUEST['nombre'];/*Extraer el nombre del formulario*/
        $email = $_REQUEST['email'];/*Extraer el email del formulario*/
        $asunto = $_REQUEST['asunto'];/*Extraer el asunto del formulario*/
        $mensaje = $_REQUEST['mensaje'];/*Extraer el nombre del formulario*/
        $header = "From: aviso@pagina.com" . "\r\n";/*Encabezado del email*/
        $header .= "Replay-To: aviso@pagina.com" . "\r\n";
        $header .= "X-Mailer: PHP/".phpversion();
        $mail=@mail($email,"Gracias por su comentario",$mensaje,$header);/*Enviar el nombre del formulario*/
        if($mail){/*Si se envio correctamente el email entra al condicional*/
            echo "<script>alert('Se envio el correo, muchas Gracias')</script>";/*Envia una alaerta*/
            echo "<script>setTimeout(location.href='form.html',1000)</script>";/*Regresa a la pagina del formulario */
        }
    }else{
        echo "<script>alert('Introdusca todos los datos por favor')</script>";/*Envia una alerta*/
        echo "<script>setTimeout(location.href='form.html',1000)</script>";/*Regresa a la pagina del formulario*/
    }
}
?>