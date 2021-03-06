<?php
    error_reporting(-1);
    ini_set('display_errors', 'On');
    set_error_handler("var_dump");
    if(isset($_POST['submit'])){
        $nombre = $_POST['name'];
        $email = $_POST['email'];
        $empresa = $_POST['empresa'];
        $message = $_POST['message'];

        $to = "a00828010@tec.mx";
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
            echo '<script>alert("Correo Enviado Correctamente")</script>';
        } else {
            echo '<script>alert("No se pudo enviar el correo")</script>';
        }
        
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rythmik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div id="index">
        <img id="img-landing" src="./img/Hero_main_mod1.png" alt="">
        <nav id="navbarr" class="navbar navbar-expand-lg">
            <div class="container-fluid mx-md-5 mx-sm-2">
                <a href="#" class="navbar-brand">
                    <img id="logo-nav" src="./img/RTMKS_White.png" alt="" width="200">
                </a>
                <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="nav navbar-nav ms-auto">
                    <li class="nav-item m-3">
                        <a style="color: #EA0D43;" class="nav-link" aria-current="page" href="#">METODOLOG??A R</a>
                    </li>
                    <li class="nav-item m-3">
                        <a class="nav-link" href="servicios.html">SERVICIOS</a>
                    </li>
                    <li class="nav-item m-3">
                        <a class="nav-link" href="#contactanos-div">CONTACTO</a>
                    </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid texto-pagina-1">
            <div class="row mt-5 mx-md-5 mx-sm-2">
                <div class="col-lg-8 col-12">
                    <h1 class="mt-2 titulo-1"><i class="light">??ES MOMENTO DE CRECER TU NEGOCIO?</i></h1>
                    <h1 class="titulo-1 bold mb-3">CONSTRUYE TU MARCA</h1>
                    <p class="light mb-4">Hay una enorme diferencia entre construir un negocio y una marca. Descuidar la construcci??n de tu marca frena el alcance de tu negocio. <span class="bold">El primer paso es conocer el estatus de tu marca, el segundo, desatar su potencial.</span></p>        
                    <button onclick="window.open('https://linktr.ee/rythmik.mx','_blank')" class="boton-rojo-1 texto-boton">Realiza aqu?? el diagnostico de tu marca</button>
                </div>
            </div>
            <div class="row mx-md-5 mx-sm-2 segundo-texto-index justify-content-center">
                <div class="col-lg-4 col-12">
                    <img class="img-fluid" src="./img/LightningPower.png" alt="">
                </div>
                <class class="col-lg-8 col-12 poder-impactar">
                    <h1 class="mb-4">HAY MUCHO PODER EN TU MARCA, PODER PARA <i>IMPACTAR</i></h1>
                    <p class="mb-4">Eso es lo que diferencia a tu negocio de la competencia y mantiene su vigencia en tiempos inciertos. <span>Te ayudamos con la construcci??n de una marca s??lida que te lleve a nuevos hotizontes y te ayude a conectar con tu audiencia.</span> Libera todo ese potencial creando experiencias que conecten, den voz y ritmo a tu negocio.</p>
                    <span class="mb-4">Da el primer paso conociendo el estado de tu marca, nosotros te guiaremos en lo que viene.</span>
                    <button onclick="window.open('https://linktr.ee/rythmik.mx','_blank')" class="boton-rojo-1 texto-boton">Realiza aqu?? el diagnostico de tu marca</button>
                </class>
            </div>
        </div>
    </div>
    <div id="metodologia">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-8">
                    <h1 class="font-metodologia titulo-metodologia">UNA MARCA QUE SOBRESALE EMPIEZA CON FUNDAMENTOS S??LIDOS</h1>
                    <p class="texto-metodologia-1">Hacer de la construcci??n de tu marca un proceso claro y estructurado con el desarrollo total de la metodolog??a R, una metodolog??a dise??ada para el desarrollo de marcas que buscan aprovechar todo su potencial.</p>
                    <h3 class="font-metodologia subtitulo-metodologia">TU MARCA VIVE EL PROCESO DE:</h3>
                </div>
            </div>
            <div class="row mx-md-5 mx-sm-2 mb-5 lista-metodologia align-items-top">
                <div class="col-lg-4 col-12">
                    <div class="row">
                        <div class="col-4">
                            <img src="./img/1.png" alt="" class="img-fluid">
                        </div>
                        <div class="col-8 contenedor-lista">
                            <h3 class="font-metodologia">DIAGN??STICO</h3>
                            <p class="sub-lista">CON??CE EL ESTATUS DE TU MARCA</p>
                            <p>El primer paso es diagnosticar el estado actual de tu marca, <span>as?? sabremos en d??nde hay que trabajar y en d??nde tendr?? mayor efecto tu inversi??n.</span></p>
                            <button onclick="window.open('https://linktr.ee/rythmik.mx','_blank')" class="boton-metodologia-1 texto-boton">Realiza tu diagn??stico</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="row">
                        <div class="col-4">
                            <img src="./img/2.png" alt="" class="img-fluid">
                        </div>
                        <div class="col-8 contenedor-lista">
                            <h3 class="font-metodologia">DESARROLLO</h3>
                            <p class="sub-lista">PLAN PARA FORTALECER TU MARCA</p>
                            <p><span>El siguiente es establecer un plan de acci??n para desarrollar cada elemento de la marca</span> de forma que haya ritmo, armon??a y coherencia en cada uno.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="row">
                        <div class="col-4">
                            <img src="./img/3.png" alt="" class="img-fluid">
                        </div>
                        <div class="col-8 contenedor-lista">
                            <h3 class="font-metodologia">CRECIMIENTO</h3>
                            <p class="sub-lista">EJECUCI??N DE EXPERIENCIAS CREATIVAS</p>
                            <p>Una vez desarrollada la estrategia, es momento de ponerla en acci??n en diferentes medios para <span>atraer a tu audiencia e impulsar tu negocio.</span></p>
                            <button onclick="window.open('http://rythmik.mx/servicios.html','_blank')" class="boton-metodologia texto-boton">Con??ce nuestros servicios</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="info-metodologia row justify-content-between" id="parent-metodologia">
                <div class="row justify-content-lg-between justify-content-md-center mb-5 opciones-metodologia" id="opciones-met">
                    <button id="boton-contexto" class="col-md-4 col-lg-2">CONTEXTO</button>
                    <button id="boton-brand" class="col-md-4 col-lg-2">BRAND CENTER</button>
                    <button id="boton-esencia" class="col-md-4 col-lg-2">ESENCIA</button>
                    <button id="boton-estrategia" class="col-md-4 col-lg-2">ESTRATEGIA</button>
                    <button id="boton-expresion" class="col-md-4 col-lg-2">EXPRESI??N</button>
                </div>
                <div class="texto-metodologia col-lg-3 col-12 align-self-center" id="texto-metodologia-r">
                    <h3 class="font-metodologia" id="titulo-metodologia">METODOLOG??A R</h3>
                    <p class="sub-lista" id="subtitulo-metodologia">TRABAJAMOS CON LAS MARCAS DE MANERA 360&#186;</p>
                    <p id="p-metodologia-1">Estar al frente de un proyecto es bastante demandante. Conforme crece, se vuelve dif??cil ver el mapa completo de lo que necesitamos trabajar y en ocasiones hace falta una gu??a que nos lleve al siguiente paso y ponga ??rden en los temas en los que necesitamos trabajar.</p>
                    <p id="p-metodologia-2">De ah?? nace la <span>metodolog??a R, dise??ada para que cada elemento de la marca tenga ritmo, coherencia y que la marca en su conjunto se transforme en una experiencia memorable.</span></p>
                </div>
                <div class="col-lg-7 col-11 mb-5 align-self-center">
                    <img id="img-metodologia-r" class="img-metodologia mx-auto" src="./img/MetodologiaR.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid no-sabes">
        <div class="row mx-md-5 mx-sm-2">
            <div class="col-lg-4 col-12 no-sabes-texto">
                <h1>??NO SABES POR D??NDE EMPEZAR?</h1>
                <p>Conocer el estatus de tu marca es el primer paso para exponenciar su crecimiento.</p>
                <button onclick="window.open('https://linktr.ee/rythmik.mx','_blank')" class="boton-rojo-1 texto-boton">Realiza aqu?? el diagnostico de tu marca</button>
            </div>
        </div>
    </div>
    <div class="desata">
        <h1>DESATA EL PODER DE TU <i>MARCA</i></h1>
    </div>
    <div class="contactanos container-fluid my-5" id="contactanos-div">
        <div class="row justify-content-between mx-md-5 mx-sm-2">
            <div class="col-lg-4 col-12 texto-contactanos">
                <img src="./img/RTHMK_ISO.svg" alt="" class="filter-red img-fluid logo-contactanos mb-4">
                <h1 class="font-metodologia">??TIENES DUDAS DEL PROCESO?</h1>
                <p>Agenda una llamada con nosotros y aclararemos todas tus dudas. <span>El poder de tu marca comienza contigo.</span></p>
            </div>
            <div class="col-lg-6 col-12 contactanos-box">
                <form action="" method="POST">
                    <h1 class="font-metodologia">CONT??CTANOS</h1>
                    <label for="name">Nombre</label>
                    <input type="text" id="name" name="name" placeholder="Escribe tu nombre aqu??" required>
                    <small class="error">&nbsp;</small>

                    <label for="email">Correo</label>
                    <input type="text" id="email" name="email" placeholder="ejemplo@gmail.com" required>
                    <small class="error">&nbsp;</small>

                    <label for="empresa">Empresa</label>
                    <input type="text" id="empresa" name="empresa" placeholder="El nombre de tu proyecto" required>
                    <small class="error">&nbsp;</small>

                    <label for="message">Mensaje</label>
                    <textarea id="message" name="message" placeholder="Nos encanta poder platicar contigo" rows="4" required></textarea> 
                    <small class="error">&nbsp;</small>

                    <div>
                        <input class="boton-contactanos mt-3 texto-boton" type="submit" name="submit" value="Enviar mensaje">
                        <p id="success"></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="footer container-fluid mx-auto">
        <div class="row justify-content-evenly align-items-center flex-column flex-md-row">
            <div class="col-3">
                <a href="#contactanos" class="link-footer">Contacto</a>
            </div>
            <div class="col-3">
                <p>Toluca</p>
                <p>Quer??taro</p>
                <p>Monterrey</p>
            </div>
            <div class="col-3">
                <p>rythmik.mx</p>
                <a href=""><img class="social-icon" src="./img/FB.svg" alt=""></a>
                <a href=""><img class="social-icon" src="./img/IG.svg" alt=""></a>
                <a href=""><img class="social-icon" src="./img/Twitter.svg" alt=""></a>
                <a href=""><img class="social-icon" src="./img/Youtube.svg" alt=""></a>
                <img class="img-fluid logo-footer filter-white" src="./img/RTHMK_ISO.svg" alt="">
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="./script.js"></script>
</body>
</html>