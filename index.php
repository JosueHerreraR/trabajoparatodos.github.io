<?php
    session_start();
    if(empty($_SESSION["id"])){
        header("location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="autor" content="Abdiel Cen, Luis Chuc, Joel Herrera, Jose Poot y Wilfrido Puc"/>
        <meta name="copyright" content=""/> 
        <meta name="description" content="Sistema de Control Escolar de Educacion Media Superior">
        <title>Sistema de Infraestructura de Media Superior</title>
        <link rel="shortcut icon" href="./img/icono_paems.jpg" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
        <link rel="stylesheet" href="css/form.css">
        <link rel="stylesheet" href="css/estilos.css">
    </head>    
    <body>   
        <header>
            <div class="container">
                <nav class="nav">
                    <div class="menu-toggle">
                        <i class="fas fa-bars"></i>
                        <i class="fas fa-times"></i>
                    </div>
                    <div class="user">
                        <?php
                        echo $_SESSION["nombres"]." ".$_SESSION["apellidos"];
                        ?>
                    </div>
                    <ul class="nav-list">
                        <li class="nav-item">
                            <a href="index.html" class="nav-link active">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link ">Infraestructura</a>
                        </li>
                        <li class="nav-item">
                            <a href="controlador/controlador_cerrar_session.php" class="nav-link">Cerrar Sesión</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>

        <section class="hero" id="hero">
            <div class="container">
                <h2 class="h2-new  ">
                    <span class="fil">S</span>istema de Infraestructura
                </h2>
                <h1 class="head">del Nivel Media Superior</h1>
            </div>
        </section>

        <section>
        <!--<div class="container-form">
                <div class="cont-form">
                    <img src="img/candado.webp" alt="">
                    <h2>Iniciar Sesión</h2>
                    <form action="" method="post">
                        <input type="text" placeholder="Ingrese un Usuario">
                        <input type="password" placeholder="Ingrese una Contraseña">
                        <input class="check" type="checkbox" id="check-id">
                        <label for="check-id">Recuerdame</label>
                        <a href="#">¿Olvidaste tu Contraseña?</a>
                        <input class="boton" type="submit" value="Iniciar Sesión">
                    </form>
                </div>
            </div> -->
        </section>
       
        <footer>
            <div class="container">
                <ul class="social_icon">
                    <li><a href="https://www.facebook.com/GobQuintanaRoo/" target="_blank"><ion-icon name="logo-facebook"></ion-icon></a></li>
                    <li><a href="https://twitter.com/GobQuintanaRoo" target="_blank"><ion-icon name="logo-twitter"></ion-icon></a></li>
                    <li><a href="https://www.instagram.com/gobiernodequintanaroo/" target="_blank"><ion-icon name="logo-instagram"></ion-icon></a></li>
                    <li><a href="https://qroo.gob.mx/seq/" target="_blank"><ion-icon name="globe-outline"></ion-icon></a></li>
                    <li><a href="https://www.youtube.com/channel/UCZinqUA0oPqXxmEAToc8XrQ" target="_blank"><ion-icon name="logo-youtube"></ion-icon></a></li>
                </ul>
                <ul class="menu_footer">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">PAENMS</a></li>
                    <li><a href="#">Infraestructura</a></li>
                </ul>
                <p>Todos los derechos reservados &copy; 2022 Secretaria de Educación Publica y Universidad de Quintana Roo</p>
            </div>
        </footer>

        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script src="js/menu_responsive.js"></script>
        <script src="js/header.js"></script>  
    </body>
<html>
