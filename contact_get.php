<?php
    error_reporting(-1);
    ini_set('display_errors', 'On');
    set_error_handler("var_dump");
    print_r($_POST);
    if(isset($_POST['submit'])){
        $nombre = $_POST['name'];
        $email = $_POST['email'];
        $empresa = $_POST['empresa'];
        $message = $_POST['message'];

        $to = "jmgomezortiz@gmail.com";
        $from = "a00828010@tec.mx";
        $subject = $nombre.' desea contactarte!';
        $correo = "Nombre: " .$nombre;

        $headers =  "From: ".($from)."\r\n";
        $headers .= "Reply-To: ".($from)."\r\n";
        $headers .= "Return-Path: ".($from)."\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=UTF-8\r\n";
        $headers .= "X-Priority: 3\nX-MSmail-Priority: high";
        $headers .= "X-Mailer: PHP".phpversion()."\r\n";

        $result = mail($to, $subject, $message, $headers);

        if($result){
            $noti = "Correo enviado correctamente";
        } else {
            $noti = "Error al enviar correo.";
        }

        $notiCK = "notificacion";
        $notiCK_value = $noti;
        setcookie($notiCK, $notiCK_value, 0, "/"); // 86400 = 1 day
        
        echo $noti;
    }
    
?>