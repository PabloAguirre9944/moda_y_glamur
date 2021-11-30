<?php
if (isset($_POST['enviar'])){
    if (!empty($_REQUEST["nombre"]) && !empty($_REQUEST["email"]) && !empty($_REQUEST["asunto"]) && !empty($_REQUEST["mensaje"])){
        $nombre = $_REQUEST['nombre'];
        $email = $_REQUEST['email'];
        $asunto = $_REQUEST['asunto'];
        $mensaje = $_REQUEST['mensaje'];
        $header = "From: aviso@pagina.com" . "\r\n";
        $header .= "Replay-To: aviso@pagina.com" . "\r\n";
        $header .= "X-Mailer: PHP/".phpversion();
        $mail=@mail($email,"Gracias por su comentario",$mensaje,$header);
        if($mail){
            echo "<script>alert('Se envio el correo, muchas Gracias')</script>";
            echo "<script>setTimeout(location.href='form.html',1000)</script>";
        }
    }else{
        echo "<script>alert('Introdusca todos los datos por favor')</script>";
        echo "<script>setTimeout(location.href='form.html',1000)</script>";
    }
}
?>